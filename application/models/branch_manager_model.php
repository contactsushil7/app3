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




	
}