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


	

// Student List By Class
function Student_by_grade()
{

	$student =$this->branch_manager_model->Student_by_grade();
	$output="";
	foreach ($student as $row) {
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




function editStudent($student_id)
{

	$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			//$branch_id=$this->session->userdata("branch_id");
			
			$data['StudentDetails']=$this->admin_model->studentMail($student_id);
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('editStudent',$data);
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
}


function UpdateStudent($Student_id)
{
	$this->branch_manager_model->UpdateStudent($Student_id);
	redirect('admin/viewStudent');
}

///////////////Shiv Yadav/////////////////////////
function updatefaculty($teacher_id)
{
	$this->branch_manager_model->updatefaculty($teacher_id);
	redirect('admin/viewFaculty');
}

function updateexstaff($staff_id)
{
	$this->branch_manager_model->updateexstaff($staff_id);
	redirect('admin/view_ex_staff');
}

function updatestaff($staff_id)
{
	$this->branch_manager_model->updatestaff($staff_id);
	redirect('admin/viewStaff');
}


function updateexfaculty($teacher_id)
{
	$this->branch_manager_model->updateexfaculty($teacher_id);
	redirect('admin/Ex_Faculty');
}

function updateexstudent($Student_id)
{
	$this->branch_manager_model->updateexstudent($Student_id);
	redirect('admin/viewexstudent');
}


function editexstaff($staff_id)
{

	$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$branch_id=$this->session->userdata("branch_id");
			
			$data['staffdetail']=$this->admin_model->ExstaffMail($staff_id);
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('editexstaff',$data);
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
}


function editstaff($staff_id)
{

	$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$branch_id=$this->session->userdata("branch_id");
			
			$data['staffdetail']=$this->admin_model->staffMail($staff_id);
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('editstaff',$data);
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
}


function editfaculty($teacher_id)
{

	$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$branch_id=$this->session->userdata("branch_id");
			
			$data['facultydetail']=$this->admin_model->facultyMail($teacher_id);
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('editfaculty',$data);
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
}

function editexfaculty($teacher_id)
{

	$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			//$branch_id=$this->session->userdata("branch_id");
			
			$data['exfacultydetail']=$this->admin_model->exfacultyMail($teacher_id);
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('editexfacultydetails',$data);
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
}

function editexstudent($student_id)
{

	$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			//$branch_id=$this->session->userdata("branch_id");
			
			$data['StudentDetails']=$this->admin_model->exstudentMail($student_id);
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('editexstudent',$data);
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
}



function exStudent_by_grade()
{

	$student =$this->branch_manager_model->exStudent_by_grade();
	$output="";
	foreach ($student as $row) {
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

function Studentq()
{

	$student =$this->branch_manager_model->Student_by_grade();
	$output="";
	foreach ($student as $row) {
		# code...
		$output.='<tr class="'."s".$row['student_id'].'">
  	<td><a href="#bModal" data-toggle="modal" id="'.$row['student_id'].'" >'.$row["fname"]." ". $row["lname"].'</a></td>
	</tr>';
	}
	echo $output;

}

function exStudent_search()
{
	$application =$this->branch_manager_model->exStudent_search();
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


function Exstaffsearch()
{
	$application =$this->branch_manager_model->Exstaffsearch();
	$output="";
	foreach ($application as $row) {
		# code...
			//echo $application;
		$output.='<tr class="'."s".$row['staff_id'].'">
                                        <td><input type="checkbox" name="order[]" value="'.$row['staff_id'].'"/></td>
                                       <td><a href="#bModal" data-toggle="modal" id="'.$row['staff_id'].'" >'.$row["Name"].'</a></td>
										<td>'.$row["designation"].'</td>
										<td>'.$row["qualification"].'</span></td>
										<td>'.$row["phone"].'</td>
										<td>'.$row["email"].'</td>
										<td>'.$row["address"].'</td>
										<td class="TAC">
                                        	<a class="action1 tip" title="View Detail" id="'.$row['staff_id'].'" onClick="viewExStaffDetails(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
                                            <a class="action2" id="'.$row['staff_id'].'"  href="'.site_url('branch_manager_controller/editfaculty'."/".$row['staff_id']).'"><span class="icon-pencil"></span></a> 
                                            <a class="action3 " id="'.$row['staff_id'].'" onClick="Exstaffdeletes(this.id)" href="#"><span class="icon-trash"></span></a>
                                      

									</tr>';
	}
	echo $output;
}

function staffsearch()
{
	$application =$this->branch_manager_model->staffsearch();
	$output="";
	foreach ($application as $row) {
		# code...
			//echo $application;
		$output.='<tr class="'."s".$row['staff_id'].'">
                                        <td><input type="checkbox" name="order[]" value="'.$row['staff_id'].'"/></td>
                                       <td><a href="#bModal" data-toggle="modal" id="'.$row['staff_id'].'" >'.$row["Name"].'</a></td>
										<td>'.$row["designation"].'</td>
										<td>'.$row["qualification"].'</span></td>
										<td>'.$row["phone"].'</td>
										<td>'.$row["email"].'</td>
										<td>'.$row["address"].'</td>
										<td class="TAC">
                                        	<a class="action1 tip" title="View Detail" id="'.$row['staff_id'].'" onClick="viewStaffDetails(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
                                            <a class="action2" id="'.$row['staff_id'].'"  href="'.site_url('branch_manager_controller/editfaculty'."/".$row['staff_id']).'"><span class="icon-pencil"></span></a> 
                                            <a class="action3 " id="'.$row['staff_id'].'" onClick="staffdeletes(this.id)" href="#"><span class="icon-trash"></span></a>
                                      

									</tr>';
	}
	echo $output;
}



function facultysearch()
{
	$application =$this->branch_manager_model->facultysearch();
	$output="";
	foreach ($application as $row) {
		# code...
			//echo $application;
		$output.='<tr class="'."s".$row['teacher_id'].'">
                                        <td><input type="checkbox" name="order[]" value="'.$row['teacher_id'].'"/></td>
                                       <td><a href="#bModal" data-toggle="modal" id="'.$row['teacher_id'].'" >'.$row["Name"].'</a></td>
										<td>'.$row["Designation"].'</td>
										<td>'.$row["qualification"].'</span></td>
										<td>'.$row["email"].'</td>
										<td>'.$row["permanent"].'</td>
										<td class="TAC">
                                        	<a class="action1 tip" title="View Detail" id="'.$row['teacher_id'].'"  onClick="viewefacultydetailss(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
                                            <a class="action2" id="'.$row['teacher_id'].'"  href="'.site_url('branch_manager_controller/editfaculty'."/".$row['teacher_id']).'"><span class="icon-pencil"></span></a> 
                                            <a class="action3 " id="'.$row['teacher_id'].'" onClick="deletesStudent(this.id)" href="#"><span class="icon-trash"></span></a>
                                        </td>
											

									</tr>';
	}
	echo $output;
}


function exfacultysearch()
{
	$application =$this->branch_manager_model->exfacultysearch();
	$output="";
	foreach ($application as $row) {
		# code...
			//echo $application;
		$output.='<tr class="'."s".$row['teacher_id'].'">
                                        <td><input type="checkbox" name="order[]" value="'.$row['teacher_id'].'"/></td>
                                       <td><a href="#bModal" data-toggle="modal" id="'.$row['teacher_id'].'" >'.$row["Name"].'</a></td>
										<td>'.$row["Designation"].'</td>
										<td>'.$row["qualification"].'</span></td>
										<td>'.$row["email"].'</td>
										<td>'.$row["permanent"].'</td>
										<td class="TAC">
                                        	<a class="action1 tip" title="View Detail" id="'.$row['teacher_id'].'"  onClick="ExViewDetails(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
                                            <a class="action2" id="'.$row['teacher_id'].'"  href="'.site_url('branch_manager_controller/editStudent'."/".$row['teacher_id']).'"><span class="icon-pencil"></span></a> 
                                            <a class="action3 " id="'.$row['teacher_id'].'" onClick="deletesStudent(this.id)" href="#"><span class="icon-trash"></span></a>
                                        </td>
				
									</tr>';
	}
	echo $output;
}


function getclassfee()
{
$fees =$this->branch_manager_model->getclassfee();
foreach ($fees as $rows) {
	echo $rows['fee_amount'];
}

}

function feestudentid()
{
	$application =$this->branch_manager_model->feestudentid();
	$output="";
	if(!empty($application)){
	foreach ($application as $row) {

		$output.='<tr class="'."s".$row['student_id'].'">
										<td>'.$row["fname"].'</td>
                                       	<td>'.$row["payment_date"].'</td>
										<td>'.$row["payment_from"].'</td>
										<td>'.$row["payment_to"].'</td>
										<td>'.$row["tution"].'</td>
										<td>'.$row["fee_deposite"].'</td>
										<td id="due_fees">'.$row["due_fee"].'</td>
										
									</tr>';
	}

}else{
	$output.='<tr>
										<td></td>
                                       	<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td id="due_fees">0</td>
										
									</tr>';
}
	echo $output;
}

public function FeePayment()
	{
		$this->branch_manager_model->FeePayment();
		redirect("admin/StudentFeePayment");
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


public function deleteStudent()
	{
		//echo "delete";
		$application_id=$this->input->post("id");
		$details=$this->admin_model->studentMail($application_id);
		foreach ($details as $row) {
				# code...]
				$urls=$row('url');
				unlink($urls);
			}
		$status=$this->branch_manager_model->deleteStudent($application_id);
		
	}



public function viewefacultydetailss(){
	//echo "<h1>hello dear </h1>";s
	$app_id=$this->input->post('id');
	$details=$this->admin_model->facultyMail($app_id);
	$output="";
	foreach ($details as $row) {
		$output.='<div class="block-fluid">
			
			<table cellpadding="0" cellspacing="0" width="100%" class="sTable">
			<tbody>						
			<tr>
			<td>';
			$output.='<img src="'.  base_url().$row['profile_url'].'" class="img-circle" height="100px"  width="100px"></td>';
			$output.='<td>'. "<span>Name: ".$row['Name'].'</span><br>'.
			"<span>Gender: ".$row['gender'].'</span><br>'.
			'</td>
			</tr>

			<tr>
			<td><h5> Qualification Details</h5></td>
				<td>'. "<b>Qualification ".'</b><br>'.
				"<span>".$row['qualification'].'</span><br>'.
			     '</td>
			    <td>
				'. "<b>Specilization".'</b><br>'.
				"<span>".$row['specilization'].'</span><br>'.
			    '</td>
			</tr>
			<tr>
			<td><h5> Email & Phone </h5></td>
				<td>'. "<b>Email ".'</b><br>'.
				"<span>".$row['email'].'</span><br>'.
			     '</td>
			    <td>
				'. "<b>Phone Number".'</b><br>'.
				"<span>".$row['phone'].'</span><br>'.
			    '</td>
			</tr>

			<tr>
			<td><h5> Address</h5></td>
				<td>'. "<b>Temporary Address ".'</b><br>'.
				"<span>".$row['temporary'].'</span><br>'.
			'</td>

			<td>'. "<b>Permanent Address".'</b><br>'.
			"<span>".$row['permanent'].'</span><br>'.
			'
			</td>
			</tr>						
			</tbody>
			</table>			
			</div>';
	}
	echo $output;

}



public function viewexfacultydetails(){
	//echo "<h1>hello dear </h1>";s
	$app_id=$this->input->post('id');
	$details=$this->admin_model->exfacultyMail($app_id);
	$output="";
	foreach ($details as $row) {
		$output.='<div class="block-fluid">
			
			<table cellpadding="0" cellspacing="0" width="100%" class="sTable">
			<tbody>						
			<tr>
			<td>';
			$output.='<img src="'.  base_url().$row['profile_url'].'" class="img-circle" height="100px"  width="100px"></td>';
			$output.='<td>'. "<span>Name: ".$row['Name'].'</span><br>'.
			"<span>Gender: ".$row['gender'].'</span><br>'.
			'</td>
			</tr>

			<tr>
			<td><h5> Qualification Details</h5></td>
				<td>'. "<b>Qualification ".'</b><br>'.
				"<span>".$row['qualification'].'</span><br>'.
			     '</td>
			    <td>
				'. "<b>Specilization".'</b><br>'.
				"<span>".$row['specilization'].'</span><br>'.
			    '</td>
			</tr>
			<tr>
			<td><h5> Email & Phone </h5></td>
				<td>'. "<b>Email ".'</b><br>'.
				"<span>".$row['email'].'</span><br>'.
			     '</td>
			    <td>
				'. "<b>Phone Number".'</b><br>'.
				"<span>".$row['phone'].'</span><br>'.
			    '</td>
			</tr>

			<tr>
			<td><h5> Address</h5></td>
				<td>'. "<b>Temporary Address ".'</b><br>'.
				"<span>".$row['temporary'].'</span><br>'.
			'</td>

			<td>'. "<b>Permanent Address".'</b><br>'.
			"<span>".$row['permanent'].'</span><br>'.
			'
			</td>
			</tr>						
			</tbody>
			</table>			
			</div>';
	}
	echo $output;

}


public function viewexstudentdetails(){
	//echo "<h1>hello dear </h1>";s
	$app_id=$this->input->post('id');
	$details=$this->admin_model->exstudentMail($app_id);
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



public function viewExStaffDetails(){
	//echo "<h1>hello dear </h1>";s
	$app_id=$this->input->post('id');
	$details=$this->admin_model->ExstaffMail($app_id);
	$output="";
	foreach ($details as $row) {
		$output.='<div class="block-fluid">
			
			<table cellpadding="0" cellspacing="0" width="100%" class="sTable">
			<tbody>
			 
			
			<tr>
			<td>';
			$output.='<img src="'.  base_url().$row['profile_url'].'" class="img-circle" height="100px"  width="100px"></td>';
			$output.='<td>'. "<span>Name: ".$row['Name'].'</span><br>'.
							"<span>Gender: ".$row['gender'].'</span><br>'.
							"<span>Joining Date : ".$row['joining_date'].'</span><br>'.

							
			'</td>

			<td>

					'. "<span>Email Address: ".$row['email'].'</span><br>'.
							"<span>Phone Number: ".$row['phone'].'</span><br>'.'
			
			</td>
			</tr>
				
			<td><h5> Address</h5></td>
				<td>'. "<b>Temporary Address ".'</b><br>'.
							"<span>".$row['tempAddress'].'</span><br>'.
			'</td>

			<td>

					'. "<b>Permanent Address".'</b><br>'.
							"<span>".$row['address'].'</span><br>'.
			'
			
			</td>
			</tr>
			<tr>
			<td><h5> Post Details</h5></td>
				<td>'. "<b>Qualification ".'</b><br>'.
							"<span>".$row['qualification'].'</span><br>'.
			'</td>

			<td>'. "<b>Designation".'</b><br>'.
							"<span>".$row['designation'].'</span><br>'.
			'</td>

			</tr>


			
			</tbody>
			</table>
			
			</div>';


	}
	echo $output;

}



public function viewStaffDetails(){
	//echo "<h1>hello dear </h1>";s
	$app_id=$this->input->post('id');
	$details=$this->admin_model->staffMail($app_id);
	$output="";
	foreach ($details as $row) {
		$output.='<div class="block-fluid">
			
			<table cellpadding="0" cellspacing="0" width="100%" class="sTable">
			<tbody>
			 
			
			<tr>
			<td>';
			$output.='<img src="'.  base_url().$row['profile_url'].'" class="img-circle" height="100px"  width="100px"></td>';
			$output.='<td>'. "<span>Name: ".$row['Name'].'</span><br>'.
							"<span>Gender: ".$row['gender'].'</span><br>'.
							"<span>Joining Date : ".$row['joining_date'].'</span><br>'.

							
			'</td>

			<td>

					'. "<span>Email Address: ".$row['email'].'</span><br>'.
							"<span>Phone Number: ".$row['phone'].'</span><br>'.'
			
			</td>
			</tr>
				
			<td><h5> Address</h5></td>
				<td>'. "<b>Temporary Address ".'</b><br>'.
							"<span>".$row['tempAddress'].'</span><br>'.
			'</td>

			<td>

					'. "<b>Permanent Address".'</b><br>'.
							"<span>".$row['address'].'</span><br>'.
			'
			
			</td>
			</tr>
			<tr>
			<td><h5> Post Details</h5></td>
				<td>'. "<b>Qualification ".'</b><br>'.
							"<span>".$row['qualification'].'</span><br>'.
			'</td>

			<td>'. "<b>Designation".'</b><br>'.
							"<span>".$row['designation'].'</span><br>'.
			'</td>

			</tr>


			
			</tbody>
			</table>
			
			</div>';


	}
	echo $output;

}


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



public function ExViewDetails(){
	//echo "<h1>hello dear </h1>";s
	$app_id=$this->input->post('id');
	$details=$this->admin_model->exteacherMail($app_id);
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



// Updating the Application Details
function UpdateApplication($id)
{
	$this->branch_manager_model->UpdateApplication($id);
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


public function deleteAllexFaculty()
	{
			//echo "Delete all record";
			$application_id=$this->input->post("order");
			$p=$this->input->post("submit");
		//echo $p;
			if($p=="delete"){
		
			if($application_id)
			{
			for($i=0;$i<sizeof($application_id);$i++)
			{
			$this->branch_manager_model->deleteexfaculty($application_id[$i]);
			}
			}
		    }
		   else{
			if($application_id)
			{
			for($i=0;$i<sizeof($application_id);$i++) 
			{
			$this->branch_manager_model->converexteachertoteacher($application_id[$i]);
			}
			}
			}
	      redirect('admin/Ex_Faculty');
		
	}


public function deleteAllFaculty()
	{
			//echo "Delete all record";
				$application_id=$this->input->post("order");
				$p=$this->input->post("submit");
		//echo $p;
				if($p=="delete")
				{		
				if($application_id)
				{
				for($i=0;$i<sizeof($application_id);$i++)
				{
				$this->branch_manager_model->deletefaculty($application_id[$i]);
				}
				}

				}
				else{				
				if($application_id)
				{
				for($i=0;$i<sizeof($application_id);$i++) 
				{
				$this->branch_manager_model->convertteachertoexteacher($application_id[$i]);
				}
				}
				}
		 		redirect('admin/viewFaculty');
		
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

public function Exstaffdeletes()
	{
	//echo "delete";
		$application_id=$this->input->post("id");
		$this->branch_manager_model->Exstaffdeletes($application_id);
		
	}

public function deleteexstudent()
	{
		
		$application_id=$this->input->post("id");
		$status=$this->branch_manager_model->deleteexstudent($application_id);
		
	}



public function deletesStudent()
	{
	//echo "delete";
		$application_id=$this->input->post("id");
		$this->branch_manager_model->deletesStudent($application_id);
		
	}
public function staffdeletes()
	{
	//echo "delete";
		$application_id=$this->input->post("id");
		$this->branch_manager_model->staffdeletes($application_id);
		
	}

	public function deleteexfaculty()
	{
	echo "delete";
		$application_id=$this->input->post("id");
		$this->branch_manager_model->deleteexfaculty($application_id);
		
	}

public function deletefaculty()
	{
	echo "delete";
		$application_id=$this->input->post("id");
		$this->branch_manager_model->deletefaculty($application_id);
		
	}

public function feestudentdetails()
	{
		//$result=()
	}

	public function deleteApplication()
	{
	//echo "delete";
		$application_id=$this->input->post("id");
		$this->branch_manager_model->deleteApplication($application_id);
		
	}


			public function ViewApplication()
			{
				$user=$this->session->userdata("userid");
				$role_type=$this->session->userdata("role_type");
				if($user!="" && $role_type=="Branch_Admin")
				{
				$branch_id=$this->session->userdata("branch_id");					
				$data['application']=$this->branch_manager_model->AllApplication($branch_id);
				$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
				$this->load->view('header',$data);
				$this->load->view('viewApplication',$data);
				$this->load->view('js');
				}
				else
				{
					redirect('admin/index');
				}
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







}