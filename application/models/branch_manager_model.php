<?php
class Branch_manager_model extends CI_Model{
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
        $this->load->helper('url','form');
        $this->load->library('session');
        
	}


public function addnewapplication()
	{
		$alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		//$password =substr(str_shuffle($alpha_numeric), 0,4);
		$data['branch_id']=$this->session->userdata("branch_id");
		$data["fname"]=$this->input->post("fname");
		$data["lname"]=$this->input->post("lname");
		$data["gender"]=$this->input->post("gender");
		
		$data["seeking_grade"]=$this->input->post("Seeking_grade");
		$data["academic_year"]=$this->input->post("AcademicYear");
		$data["dob"]=$this->input->post("dob");
		$data["language"]=$this->input->post("MotherTongue");
		$data["religion"]=$this->input->post("Religion");
		$data["blood_group"]=$this->input->post("BloodGroup");
		$data["nationality"]=$this->input->post("nationality");

		$data["temp_address"]=$this->input->post("temp");
		$data["parmanent_address"]=$this->input->post("permanent");
		$data["phone"]=$this->input->post("phone");
		$data["email"]=$this->input->post("email");
		//$data["url"]=$this->input->post("designation");
		$data["previous_school"]=$this->input->post("schoolname");
		$data["percentage"]=$this->input->post("Percentage");
		$data["previous_school_address"]=$this->input->post("SchoolAddress");
		$data["previous_school_phone"]=$this->input->post("telephone");

		$data["father_name"]=$this->input->post("fathername");
		$data["father_qualification"]=$this->input->post("fqualification");
		$data["father_occupation"]=$this->input->post("foccupation");
		$data["mother_name"]=$this->input->post("mothername");
		$data["mother_occupation"]=$this->input->post("moccupation");
		$data["mother_qualification"]=$this->input->post("mqualification");
		$data["annual_income"]=$this->input->post("aincome");
		$data["parents_mobile_number"]=$this->input->post("fmobile");
		$data["parents_email"]=$this->input->post("femail");
		
		
		
		$config['upload_path'] = './img/Applicant/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '150000';
		
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('file'))
		{
			$doc=$this->upload->data();
			$document=$doc['file_name'];
			$url="img/Applicant/".$document;
			$data['url']=$url;
			echo $url;
		
		}else echo $this->upload->display_errors();
		$this->db->insert("application",$data);
		
		
		
	}

// Retriving all the application form of the particular branch

	public function	AllApplication($branch_id){


		return $this->db->query("SELECT * FROM application WHERE branch_id=$branch_id ORDER BY application_id DESC LIMIT 20")->result_array();
	}

// function for deleting Application
public function deleteApplication($application_id){

	$this->db->query("DELETE FROM application WHERE application_id=$application_id"); 
}

// converting Application to Student

function ConvertApplicationToStudent($application_id)
{
	$this->db->query("INSERT INTO student SELECT * FROM application where Application_id=$application_id");
	$this->db->query("DELETE FROM application WHERE application_id=$application_id");
}
//Getting Application Details


public function deletesStudent($student_id)
{
	$this->db->query("INSERT INTO exstudent SELECT * FROM student where student_id=$student_id");
	$this->db->query("DELETE FROM student WHERE student_id=$student_id"); 
}



public function deletefaculty($teacher_id){

	$this->db->query("DELETE FROM teacher WHERE teacher_id=$teacher_id"); 
}


public function staffdeletes($staff_id)
{
	$this->db->query("INSERT INTO exstaff SELECT * FROM staff where staff_id=$staff_id");
	$this->db->query("DELETE FROM staff WHERE staff_id=$staff_id"); 
}


public function deleteexfaculty($teacher_id){

	$this->db->query("DELETE FROM exteacher WHERE teacher_id=$teacher_id"); 
}

public function Exstaffdeletes($staff_id)
{
	
	$this->db->query("DELETE FROM exstaff WHERE staff_id=$staff_id"); 
}



function converexteachertoteacher($application_id)
{
	$this->db->query("INSERT INTO teacher SELECT * FROM exteacher where teacher_id=$application_id");
	$this->db->query("DELETE FROM exteacher WHERE teacher_id=$application_id");
}

function convertteachertoexteacher($application_id)
{
	$this->db->query("INSERT INTO exteacher SELECT * FROM teacher where teacher_id=$application_id");
	$this->db->query("DELETE FROM teacher WHERE teacher_id=$application_id");
}



public function Application_details($app_id)
{
	return $this->db->query("SELECT * FROM application WHERE application_id=$app_id ")->result_array();

}
	public function deleteStudent($student_id){

	if($this->db->query("DELETE FROM student WHERE student_id=$student_id"))
		return "true";
	else return "false";
}

	// updating the application Information 
public function UpdateApplication($app_id){
		$data['branch_id']=$this->session->userdata("branch_id");
		$data["fname"]=$this->input->post("fname");
		$data["lname"]=$this->input->post("lname");
		$data["gender"]=$this->input->post("gender");
		
		$data["seeking_grade"]=$this->input->post("Seeking_grade");
		$data["academic_year"]=$this->input->post("AcademicYear");
		$data["dob"]=$this->input->post("dob");
		$data["language"]=$this->input->post("MotherTongue");
		$data["religion"]=$this->input->post("Religion");
		$data["blood_group"]=$this->input->post("BloodGroup");
		$data["nationality"]=$this->input->post("nationality");

		$data["temp_address"]=$this->input->post("temp");
		$data["parmanent_address"]=$this->input->post("permanent");
		$data["phone"]=$this->input->post("phone");
		$data["email"]=$this->input->post("email");
		//$data["url"]=$this->input->post("designation");
		$data["previous_school"]=$this->input->post("schoolname");
		$data["percentage"]=$this->input->post("Percentage");
		$data["previous_school_address"]=$this->input->post("SchoolAddress");
		$data["previous_school_phone"]=$this->input->post("telephone");

		$data["father_name"]=$this->input->post("fathername");
		$data["father_qualification"]=$this->input->post("fqualification");
		$data["father_occupation"]=$this->input->post("foccupation");
		$data["mother_name"]=$this->input->post("mothername");
		$data["mother_occupation"]=$this->input->post("moccupation");
		$data["mother_qualification"]=$this->input->post("mqualification");
		$data["annual_income"]=$this->input->post("aincome");
		$data["parents_mobile_number"]=$this->input->post("fmobile");
		$data["parents_email"]=$this->input->post("femail");
		
		
		
		$config['upload_path'] = './img/Applicant/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '150000';
		
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('file'))
		{
			$doc=$this->upload->data();
			$document=$doc['file_name'];
			$url="img/Applicant/".$document;
			$data['url']=$url;
			echo $url;
		
		}
		
		$this->db->set($data);
		$this->db->where('application_id',$app_id);
		$this->db->update("application");
		
	}


	public function deleteexstudent($student_id)
	{
	$this->db->query("DELETE FROM exstudent WHERE student_id=$student_id");
    }




	// retrieve the application form by search keyword

	function Application_search(){

		$key=$this->input->post("key");
		return $this->db->query("SELECT * FROM application WHERE application_id LIKE '$key%' OR fname  LIKE '$key%' OR email LIKE '$key%' OR phone LIKE '$key%'")->result_array();
	}
// return search student
	function Student_search(){

		$key=$this->input->post("key");
		return $this->db->query("SELECT * FROM student WHERE student_id LIKE '$key%' OR fname  LIKE '$key%' OR email LIKE '$key%' OR phone LIKE '$key%'")->result_array();
	}





public function FeePayment()
	{
			
		$data['branch_id']=$this->session->userdata("branch_id");

		$data["student_id"]=$this->input->post("student_id_fee");
		//$data["payment_date"]=$this->input->post("payment_date");
		$data["payment_mode"]=$this->input->post("payment_mode");
		//$data["payment_from"]=

		$x=$this->input->post("payment_from");
		$str=explode("-",$x);
		$ses=date('Y');
		if(($str[0]<7) && ($str[1]<7) ){

			$f=date_create(($ses+1)."-".$str[0]."-1");
			$fs=date_format($f,'Y-m-d');
			$t=date_create(($ses+1)."-".$str[1]."-28");
				$ts=date_format($t,'Y-m-d');
		}
		else{
		if($str[0]<7){
		$f=date_create(($ses+1)."-".$str[0]."-1");
		$fs=date_format($f,'Y-m-d');
		
			}
		else{

			$f=date_create($ses."-".$str[0]."-1");
		$fs=date_format($f,'Y-m-d');
		
		}

		if($str[1]<7){
		$t=date_create(($ses+1)."-".$str[1]."-28");
		$ts=date_format($t,'Y-m-d');
		
			}
		else{

			$t=date_create($ses."-".$str[1]."-28");
		$ts=date_format($t,'Y-m-d');
		}

	  }



	
		$data["payment_to"]=$ts;
		$data["payment_from"]=$fs;
		$data["other_fee"]=$this->input->post("other_fee");
		$data["fee_deposite"]=$this->input->post("fee_deposite");
        
		$data["due_fee"]=$this->input->post("due_fee");
        
		$feedeposite=$this->input->post("fee_deposite");
		$tution=$this->input->post("tution");
		$data["tution"]=$tution;
		
		$this->db->insert("fee",$data);
	
		
	}	






function feestudentid(){

		
		$key=$this->input->post("key");
		return $this->db->query("SELECT * from fee INNER JOIN student on fee.student_id = student.student_id WHERE fee.student_id = $key  order by payment_date desc limit 1")->result_array();
	}	



function exfacultysearch(){

		$key=$this->input->post("key");
		return $this->db->query("SELECT * FROM exteacher WHERE teacher_id LIKE '$key%' OR Name  LIKE '$key%' OR email LIKE '$key%' OR phone LIKE '$key%'")->result_array();
	}	


function getclassfee()
{
		$branch_id=$this->session->userdata("branch_id");
        $classid=$this->input->post("classid");
		return $this->db->query("SELECT * FROM school_fee_list WHERE class_id = '$classid' AND branch_id=$branch_id")->result_array();
	

}



function exStudent_search(){

		$key=$this->input->post("key");
		return $this->db->query("SELECT * FROM exstudent WHERE student_id LIKE '$key%' OR fname  LIKE '$key%' OR email LIKE '$key%' OR phone LIKE '$key%'")->result_array();
	}	





function staffsearch(){

		$key=$this->input->post("key");
		return $this->db->query("SELECT * FROM staff WHERE staff_id LIKE '$key%' OR Name  LIKE '$key%' OR email LIKE '$key%' OR phone LIKE '$key%'")->result_array();
	}	



function Exstaffsearch(){

		$key=$this->input->post("key");
		return $this->db->query("SELECT * FROM exstaff WHERE staff_id LIKE '$key%' OR Name  LIKE '$key%' OR email LIKE '$key%' OR phone LIKE '$key%'")->result_array();
	}	

function facultysearch(){

		$key=$this->input->post("key");
		return $this->db->query("SELECT * FROM teacher WHERE teacher_id LIKE '$key%' OR Name  LIKE '$key%' OR email LIKE '$key%' OR phone LIKE '$key%'")->result_array();
	}



	// return the application by class
	function Application_by_grade()
	{
		$key=$this->input->post("key");
		return $this->db->query("SELECT * FROM application WHERE seeking_grade= '$key'")->result_array();

	}
	function Student_by_grade()
	{
		$key=$this->input->post("key");
		return $this->db->query("SELECT * FROM student WHERE seeking_grade= '$key'")->result_array();

	}

function exStudent_by_grade()
	{

		$key=$this->input->post("key");
		return $this->db->query("SELECT * FROM exstudent WHERE seeking_grade= '$key'")->result_array();

	}


public function updatefaculty($teacher_id)
	{
		$alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$password =substr(str_shuffle($alpha_numeric), 0,4);
		$data['branch_id']=$this->session->userdata("branch_id");
		$name=$this->input->post("name");
		$data["Name"]=$name;
		$data["Designation"]=$this->input->post("designation");
		$data["phone"]=$this->input->post("phone");
		$data["mobile"]=$this->input->post("mobile");
		$data["qualification"]=$this->input->post("qaulification");
		$data["gender"]=$this->input->post("gender");
		$data["specilization"]=$this->input->post("specilization");
		$email=$this->input->post("email");
		$data["email"]=$email;
		$data["temporary"]=$this->input->post("temp");
		$data["permanent"]=$this->input->post("permanent");
		
		$config['upload_path'] = './img/Teacher/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '150000';
		
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('file'))
		{
			$doc=$this->upload->data();
			$document=$doc['file_name'];
			$url="img/Teacher/".$document;
			$data['profile_url']=$url;
		
		}
		else echo $this->upload->display_errors();
		$this->db->set($data);
		$this->db->where('teacher_id',$teacher_id);
		$this->db->update("teacher");
		
		
	}


public function updatestaff($staff_id){

			$data['branch_id']=$this->session->userdata("branch_id");
			$name=$this->input->post("name");
			$data["Name"]=$name;
			$data["gender"]=$this->input->post("gender");
			$data["designation"]=$this->input->post("designation");
			$data["phone"]=$this->input->post("phone");
			$data["qualification"]=$this->input->post("qaulification");			
			$email=$this->input->post("email");
			$data["email"]=$email;
			$data["tempAddress"]=$this->input->post("temp");
			$data["address"]=$this->input->post("permanent");
			$data["joining_date"]=$this->input->post("joining_date");
			
			$config['upload_path'] = './img/Staff/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '150000';
				
				
				$this->load->library('upload', $config);
				
				if ($this->upload->do_upload('file1'))
				{
					$doc=$this->upload->data();
					$document=$doc['file_name'];
					$url="img/Staff/".$document;
					$data['profile_url']=$url;
				
				}

				else echo $this->upload->display_errors();
				$this->db->set($data);
				$this->db->where('staff_id',$staff_id);
				$this->db->update("staff");
			
			}



   public function updateexstaff($staff_id){

			$data['branch_id']=$this->session->userdata("branch_id");
			$name=$this->input->post("name");
			$data["Name"]=$name;
			$data["gender"]=$this->input->post("gender");
			$data["designation"]=$this->input->post("designation");
			$data["phone"]=$this->input->post("phone");
			$data["qualification"]=$this->input->post("qaulification");			
			$email=$this->input->post("email");
			$data["email"]=$email;
			$data["tempAddress"]=$this->input->post("temp");
			$data["address"]=$this->input->post("permanent");
			$data["joining_date"]=$this->input->post("joining_date");
			
			$config['upload_path'] = './img/Staff/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '150000';
				
				
				$this->load->library('upload', $config);
				
				if ($this->upload->do_upload('file1'))
				{
					$doc=$this->upload->data();
					$document=$doc['file_name'];
					$url="img/Staff/".$document;
					$data['profile_url']=$url;
				
				}

				else echo $this->upload->display_errors();
				$this->db->set($data);
				$this->db->where('staff_id',$staff_id);
				$this->db->update("exstaff");
			
			}




	public function updateexfaculty($teacher_id)
	{
		$alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$password =substr(str_shuffle($alpha_numeric), 0,4);
		$data['branch_id']=$this->session->userdata("branch_id");
		$name=$this->input->post("name");
		$data["Name"]=$name;
		$data["Designation"]=$this->input->post("designation");
		$data["phone"]=$this->input->post("phone");
		$data["mobile"]=$this->input->post("mobile");
		$data["qualification"]=$this->input->post("qaulification");
		$data["gender"]=$this->input->post("gender");
		$data["specilization"]=$this->input->post("specilization");
		$email=$this->input->post("email");
		$data["email"]=$email;
		$data["temporary"]=$this->input->post("temp");
		$data["permanent"]=$this->input->post("permanent");
		
		$config['upload_path'] = './img/Teacher/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '150000';
		
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('file'))
		{
			$doc=$this->upload->data();
			$document=$doc['file_name'];
			$url="img/Teacher/".$document;
			$data['profile_url']=$url;
		
		}else echo $this->upload->display_errors();
		$this->db->set($data);
		$this->db->where('teacher_id',$teacher_id);
		$this->db->update("exteacher");
		
	}


	public function updateexstudent($student_id)
	{
		$data['branch_id']=$this->session->userdata("branch_id");
		$data["fname"]=$this->input->post("fname");
		$data["lname"]=$this->input->post("lname");
		$data["gender"]=$this->input->post("gender");
		
		$data["seeking_grade"]=$this->input->post("Seeking_grade");
		$data["academic_year"]=$this->input->post("AcademicYear");
		$data["dob"]=$this->input->post("dob");
		$data["language"]=$this->input->post("MotherTongue");
		$data["religion"]=$this->input->post("Religion");
		$data["blood_group"]=$this->input->post("BloodGroup");
		$data["nationality"]=$this->input->post("nationality");

		$data["temp_address"]=$this->input->post("temp");
		$data["parmanent_address"]=$this->input->post("permanent");
		$data["phone"]=$this->input->post("phone");
		$data["email"]=$this->input->post("email");
		//$data["url"]=$this->input->post("designation");
		$data["previous_school"]=$this->input->post("schoolname");
		$data["percentage"]=$this->input->post("Percentage");
		$data["previous_school_address"]=$this->input->post("SchoolAddress");
		$data["previous_school_phone"]=$this->input->post("telephone");

		$data["father_name"]=$this->input->post("fathername");
		$data["father_qualification"]=$this->input->post("fqualification");
		$data["father_occupation"]=$this->input->post("foccupation");
		$data["mother_name"]=$this->input->post("mothername");
		$data["mother_occupation"]=$this->input->post("moccupation");
		$data["mother_qualification"]=$this->input->post("mqualification");
		$data["annual_income"]=$this->input->post("aincome");
		$data["parents_mobile_number"]=$this->input->post("fmobile");
		$data["parents_email"]=$this->input->post("femail");
		
		
		
		$config['upload_path'] = './img/Student/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '150000';
		
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('file'))
		{
			$doc=$this->upload->data();
			$document=$doc['file_name'];
			$url="img/Ex-Student/".$document;
			$data['url']=$url;
			echo $url;
		
		}
		
		$this->db->set($data);
		$this->db->where('student_id',$student_id);
		$this->db->update("exstudent");
		
	}





	public function UpdateStudent($student_id)
	{
		$data['branch_id']=$this->session->userdata("branch_id");
		$data["fname"]=$this->input->post("fname");
		$data["lname"]=$this->input->post("lname");
		$data["gender"]=$this->input->post("gender");
		
		$data["seeking_grade"]=$this->input->post("Seeking_grade");
		$data["academic_year"]=$this->input->post("AcademicYear");
		$data["dob"]=$this->input->post("dob");
		$data["language"]=$this->input->post("MotherTongue");
		$data["religion"]=$this->input->post("Religion");
		$data["blood_group"]=$this->input->post("BloodGroup");
		$data["nationality"]=$this->input->post("nationality");

		$data["temp_address"]=$this->input->post("temp");
		$data["parmanent_address"]=$this->input->post("permanent");
		$data["phone"]=$this->input->post("phone");
		$data["email"]=$this->input->post("email");
		//$data["url"]=$this->input->post("designation");
		$data["previous_school"]=$this->input->post("schoolname");
		$data["percentage"]=$this->input->post("Percentage");
		$data["previous_school_address"]=$this->input->post("SchoolAddress");
		$data["previous_school_phone"]=$this->input->post("telephone");

		$data["father_name"]=$this->input->post("fathername");
		$data["father_qualification"]=$this->input->post("fqualification");
		$data["father_occupation"]=$this->input->post("foccupation");
		$data["mother_name"]=$this->input->post("mothername");
		$data["mother_occupation"]=$this->input->post("moccupation");
		$data["mother_qualification"]=$this->input->post("mqualification");
		$data["annual_income"]=$this->input->post("aincome");
		$data["parents_mobile_number"]=$this->input->post("fmobile");
		$data["parents_email"]=$this->input->post("femail");
		
		
		
		$config['upload_path'] = './img/Student/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '150000';
		
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('file'))
		{
			$doc=$this->upload->data();
			$document=$doc['file_name'];
			$url="img/Student/".$document;
			$data['url']=$url;
			echo $url;
		
		}
		
		$this->db->set($data);
		$this->db->where('student_id',$student_id);
		$this->db->update("student");
		
	}




}