<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Branch_manager_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('branch_manager_model');
		$this->load->model('admin_model');
		//$this->load->database();
		$this->load->library('session');
		
		//$this->load->controller('admin');
	}

	public function NewRegi()
	{
		$this->branch_manager_model->addnewapplication();
		redirect("branch_manager_controller/NewRegistration");
	}

	public function NewRegistration()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$this->load->view('header',$data);
			$this->load->view('Registration');
			$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}


// Display All the Application 
public function ViewApplication(){
	$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$branch_id=$this->session->userdata("branch_id");
			
			$data['application']=$this->branch_manager_model->AllApplication($branch_id);
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('viewApplication',$data);
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
}

	public function deleteApplication()
	{
		//echo "delete";
		$application_id=$this->input->post("id");
		$this->branch_manager_model->deleteApplication($application_id);
		
	}


	public function deleteAllApplication()
	{
			//echo "Delete all record";
		$application_id=$this->input->post("order");
		$p=$this->input->post("submit");
		//echo $p;
		if($p=="delete"){
		
			if($application_id){
					for($i=0;$i<sizeof($application_id);$i++) {
						$this->branch_manager_model->deleteApplication($application_id[$i]);
					}
			}

		}
		else{
				
			if($application_id){
					for($i=0;$i<sizeof($application_id);$i++) {
						$this->branch_manager_model->ConvertApplicationToStudent($application_id[$i]);
					}
			}
			}
	 redirect('branch_manager_controller/viewApplication');
		
	}



function editApplication($app_id)
{

	$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			//$branch_id=$this->session->userdata("branch_id");
			
			$data['details']=$this->branch_manager_model->Application_details($app_id);
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('editApplication',$data);
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
}

// Updating the Application Details
function UpdateApplication($id)
{
	$this->branch_manager_model->UpdateApplication($id);
	redirect('branch_manager_controller/viewApplication');
}

// Function to display the Application Form Details

public function viewApplicationDetails(){
	//echo "<h1>hello dear </h1>";s
	$app_id=$this->input->post('id');
	$details=$this->branch_manager_model->Application_details($app_id);
	$output="";
	foreach ($details as $row) {
		$output.='<div class="block-fluid">
			
			<table cellpadding="0" cellspacing="0" width="100%" class="sTable">
			<tbody>
			 
			
			<tr>
			<td>';
			$output.='<img src="'.  base_url().$row['url'].'" class="img-circle" height="200px"  width="200px"></td>';
			$output.='<td>'. "<span>Name: ".$row['fname']." ".$row['lname'].'</span><br>'.
							"<span>Gender: ".$row['gender'].'</span><br>'.
							"<span>D.O.B: ".$row['dob'].'</span><br>'.

							"<span>Language :".$row['language'].'</span><br>'.
			'</td>

			<td>

					'. "<span>Seeking Grade: ".$row['seeking_grade'].'</span><br>'.
							"<span>Academic Year: ".$row['academic_year'].'</span><br>'.
							"<span>Religion : ".$row['religion'].'</span><br>'.

							"<span>Blood Group :".$row['blood_group'].'</span><br>'.
			'
			
			</td>
			</tr>
				<tr>
			<td><h5> Parent\'s Details</h5></td>
				<td>'. "<span>Father Name: ".$row['father_name'].'</span><br>'.
							"<span>Qualification :".$row['father_qualification'].'</span><br>'.
							"<span>Occupation :".$row['father_occupation'].'</span><br>'.

							"<span>Mobile:".$row['parents_mobile_number'].'</span><br>'.
			'</td>

			<td>

					'. "<span>Mother Name: ".$row['mother_name'].'</span><br>'.
							"<span>Qualification: ".$row['mother_qualification'].'</span><br>'.
							"<span>Occupation: ".$row['mother_occupation'].'</span><br>'.

							"<span>Email :".$row['parents_email'].'</span><br>'.
			'
			
			</td>
			</tr>

			<tr>
			<td><h5> Address</h5></td>
				<td>'. "<b>Temporary Address ".'</b><br>'.
							"<span>".$row['temp_address'].'</span><br>'.
			'</td>

			<td>

					'. "<b>Permanent Address".'</b><br>'.
							"<span>".$row['parmanent_address'].'</span><br>'.
			'
			
			</td>
			</tr>
							<tr>
			<td><h5> Previous School Details</h5></td>
				<td>'. "<span>School Name: ".$row['previous_school'].'</span><br>'.
							"<span>Percentage ".$row['percentage']."%".'</span><br>'.
							"<span>Phone:".$row['previous_school_phone'].'</span><br>'.
			'</td>

			<td>

					'. "<b>School  Address".'</b><br>'.
							"<span>".$row['previous_school_address'].'</span><br>'.
			'
			
			</td>
			</tr>


			
			</tbody>
			</table>
			
			</div>';


	}
	echo $output;

}


// function to Search the Application 

function Application_search()
{
	$application =$this->branch_manager_model->Application_search();
	$output="";
	foreach ($application as $row) {
		# code...

		$output.='<tr class="'."s".$row['application_id'].'">
                                        <td><input type="checkbox" name="order[]" value="'.$row['application_id'].'"/></td>
                                       <td><a href="#bModal" data-toggle="modal" id="'.$row['application_id'].'"  onClick="viewApplicationDetails(this.id)">'.$row["fname"]." ". $row["lname"].'</a></td>
										<td>'.$row["father_name"].'</a></td>
										<td>'.$row["seeking_grade"].'</td>
										<td>'.$row["email"].'</span></td>
										<td>'.$row["parmanent_address"].'</td>
										<td class="TAC">
                                            <a class="action1 tip" title="View Detail" id="'.$row['application_id'].'"  onClick="viewApplicationDetails(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
                                            <a class="action2" id="'.$row['application_id'].'"  href="'.site_url('branch_manager_controller/editApplication'."/".$row['application_id']).'"><span class="icon-pencil"></span></a> 
                                            <a class="action3 " id="'.$row['application_id'].'" onClick="deletes(this.id)" href="#"><span class="icon-trash"></span></a>
                                        </td>
									</tr>';
	}
	echo $output;
}



function Application_by_grade()
{

	$application =$this->branch_manager_model->Application_by_grade();
	$output="";
	foreach ($application as $row) {
		# code...

		$output.='<tr class="'."s".$row['application_id'].'">
                                        <td><input type="checkbox" name="order[]" value="'.$row['application_id'].'"/></td>
                                       <td><a href="#bModal" data-toggle="modal" id="'.$row['application_id'].'"  onClick="viewApplicationDetails(this.id)">'.$row["fname"]." ". $row["lname"].'</a></td>
										<td>'.$row["father_name"].'</a></td>
										<td>'.$row["seeking_grade"].'</td>
										<td>'.$row["email"].'</span></td>
										<td>'.$row["parmanent_address"].'</td>
										<td class="TAC">
                                            <a class="action1 tip" title="View Detail" id="'.$row['application_id'].'"  onClick="viewApplicationDetails(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
                                            <a class="action2" id="'.$row['application_id'].'"  href="'.site_url('branch_manager_controller/editApplication'."/".$row['application_id']).'"><span class="icon-pencil"></span></a> 
                                            <a class="action3 " id="'.$row['application_id'].'" onClick="deletes(this.id)" href="#"><span class="icon-trash"></span></a>
                                        </td>
									</tr>';
	}
	echo $output;

}


// Student Details Function 

public function viewStudentDetails(){
	//echo "<h1>hello dear </h1>";s
	$app_id=$this->input->post('id');
	$details=$this->admin_model->studentMail($app_id);
	$output="";
	foreach ($details as $row) {
		$output.='<div class="block-fluid">
			
			<table cellpadding="0" cellspacing="0" width="100%" class="sTable">
			<tbody>
			 
			
			<tr>
			<td>';
			$output.='<img src="'.  base_url().$row['url'].'" class="img-circle" height="100px"  width="100px"></td>';
			$output.='<td>'. "<span>Name: ".$row['fname']." ".$row['lname'].'</span><br>'.
							"<span>Gender: ".$row['gender'].'</span><br>'.
							"<span>D.O.B: ".$row['dob'].'</span><br>'.

							"<span>Language :".$row['language'].'</span><br>'.
			'</td>

			<td>

					'. "<span>Grade: ".$row['seeking_grade'].'</span><br>'.
							"<span>Academic Year: ".$row['academic_year'].'</span><br>'.
							"<span>Religion : ".$row['religion'].'</span><br>'.

							"<span>Blood Group :".$row['blood_group'].'</span><br>'.
			'
			
			</td>
			</tr>
				<tr>
			<td><h5> Parent\'s Details</h5></td>
				<td>'. "<span>Father Name: ".$row['father_name'].'</span><br>'.
							"<span>Qualification :".$row['father_qualification'].'</span><br>'.
							"<span>Occupation :".$row['father_occupation'].'</span><br>'.

							"<span>Mobile:".$row['parents_mobile_number'].'</span><br>'.
			'</td>

			<td>

					'. "<span>Mother Name: ".$row['mother_name'].'</span><br>'.
							"<span>Qualification: ".$row['mother_qualification'].'</span><br>'.
							"<span>Occupation: ".$row['mother_occupation'].'</span><br>'.

							"<span>Email :".$row['parents_email'].'</span><br>'.
			'
			
			</td>
			</tr>

			<tr>
			<td><h5> Address</h5></td>
				<td>'. "<b>Temporary Address ".'</b><br>'.
							"<span>".$row['temp_address'].'</span><br>'.
			'</td>

			<td>

					'. "<b>Permanent Address".'</b><br>'.
							"<span>".$row['parmanent_address'].'</span><br>'.
			'
			
			</td>
			</tr>
							<tr>
			<td><h5> Previous School Details</h5></td>
				<td>'. "<span>School Name: ".$row['previous_school'].'</span><br>'.
							"<span>Percentage ".$row['percentage']."%".'</span><br>'.
							"<span>Phone:".$row['previous_school_phone'].'</span><br>'.
			'</td>

			<td>

					'. "<b>School  Address".'</b><br>'.
							"<span>".$row['previous_school_address'].'</span><br>'.
			'
			
			</td>
			</tr>


			
			</tbody>
			</table>
			
			</div>';


	}
	echo $output;

}


public function deleteStudent()
	{
		//echo "delete";
		$application_id=$this->input->post("id");
		$details=$this->admin_model->studentMail($application_id);
		$status=$this->branch_manager_model->deleteStudent($application_id);
		if($status=="true")
		{
			foreach ($details as $row) {
				# code...]
				$urls=$row('url');
				unlink($urls);
			}
		}
		echo "hello";
	}



	function Student_search()
{
	$application =$this->branch_manager_model->Student_search();
	$output="";
	foreach ($application as $row) {
		# code...

		$output.='<tr class="'."s".$row['student_id'].'">
                                        <td><input type="checkbox" name="order[]" value="'.$row['student_id'].'"/></td>
                                       <td><a href="#bModal" data-toggle="modal" id="'.$row['student_id'].'"  onClick="viewStudentDetails(this.id)">'.$row["fname"]." ". $row["lname"].'</a></td>
										<td>'.$row["father_name"].'</a></td>
										<td>'.$row["seeking_grade"].'</td>
										<td>'.$row["email"].'</span></td>
										<td>'.$row["parmanent_address"].'</td>
										<td class="TAC">
                                            <a class="action1 tip" title="View Detail" id="'.$row['student_id'].'"  onClick="viewStudentDetails(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
                                            <a class="action2" id="'.$row['student_id'].'"  href="'.site_url('branch_manager_controller/editStudent'."/".$row['student_id']).'"><span class="icon-pencil"></span></a> 
                                            <a class="action3 " id="'.$row['student_id'].'" onClick="deletesStudent(this.id)" href="#"><span class="icon-trash"></span></a>
                                        </td>
									</tr>';
	}
	echo $output;
}



}