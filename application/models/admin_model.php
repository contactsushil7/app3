<?php
class Admin_model extends CI_Model{
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
        $this->load->helper('url','form');
        $this->load->library('session');
        
	}
	function send_mail($to,$subject,$message)
	{
		$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'yadav.idps@gmail.com', // change it to yours
				'smtp_pass' => 'divya143#####', // change it to yours
				'mailtype' => 'html',
				'charset' => 'iso-8859-1',
				'wordwrap' => TRUE
				);
	
		//$message = '';
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('sushil.idps@gmail.com'); // change it to yours
		$this->email->to($to);// change it to yours
		$this->email->subject($subject);
		$this->email->message($message);
		if($this->email->send())
		{
			echo 'Email sent.';
		}
		else
		{
			show_error($this->email->print_debugger());
		}
	}
	public function Registration(){
		$data['name']=$this->input->post("name");
		
		$mail=$this->input->post("email");
		$data['email']=$mail;
		$data['password']=$this->input->post("password");
		$data['role_type']="Admin";
		$data['is_verify']=0;
		$data['isActive']=0;
		$this->db->insert("login",$data);
		
		
		
		
	}
	public function Authentication()
	{
		$username=$this->input->post("login");
		$pass=$this->input->post("password");
		$res=$this->db->query("SELECT * FROM login where email='$username' AND password='$pass'")->result_array();
		if(!empty($res))
		{
			$data['isActive']=1;
			$this->db->where("email",$username);
			$this->db->update("login",$data);
		}
		return $res;
	}
	public function loguot($userid)
	{
		$data['isActive']=0;
		$this->db->where("user_id",$userid);
		$this->db->update("login",$data);
	}
	
	public function playGame(){
		
		return $this->db->query("SELECT * FROM game ORDER BY RAND() LIMIT  1")->result_array();
	}
	
	public function getPersonDetails($user)
	{
		return $this->db->query("SELECT * FROM login where user_id='$user'")->result_array();
	}
	
	public function GetStudentList()
	{
		return $this->db->query("SELECT * FROM student")->result_array();
	}

	public function GetStaffDetails()
	{
		return $this->db->query("SELECT * FROM staff")->result_array();
	}

	
	public function submitBlog()
	{
		$user=$this->session->userdata("userid");
		$title=$this->input->post("title");
		$content=$this->input->post("content");
		
		$data=array(
				"blog_title"=>$title,
				"blog_content"=>$content,
				"Author"=>$user
				
				);
		if($this->db->insert("Blog",$data))
		{
			return "Your blog is submittet and it will verify soon";
		}
		else return "Failed to submit";
		
	}
	
	public function getBlogs()
	{
		
		return $this->db->query("Select * from blog where is_verify=1 order by blog_id desc limit 25")->result_array();
	}
	
	public function newCollege()
	{
		$data['college_name']=$this->input->post("name");
		$data['college_owner']=$this->input->post("owner");
		$data['owner_id']=$this->session->userdata("userid");
		$this->db->insert("college",$data);
		
		
	}
	
	public function getCollege($user)
	{
		return $this->db->query("select * from college where owner_id=$user")->result_array();
	}
	
	public function newBranch(){
		$alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$password =substr(str_shuffle($alpha_numeric), 0,4);
		$data['college_id']=$this->input->post("college");
		$data['branch_name']=$this->input->post("branch");
		$name=$this->input->post("manager");
		$data['principle_name']=$name;
		$email=$this->input->post("email");
		$data['email']=$email;
		$data['mobile']=$this->input->post("phone");
		$data['address']=$this->input->post("address");
		$this->db->insert("branch",$data);
		
		$data['name']=$this->input->post("name");
		
		
		$data1['email']=$email;
		$data1['password']=$password;
		$data1['role_type']="Branch_Admin";
		$data1['is_verify']=0;
		$data1['isActive']=0;
		$this->db->insert("login",$data1);
		
		$to=$email;
		$subject="Welcome to school Management system";
		$message="Your user name=".$email ."<br> Your Password is =".$password;
		$this->send_mail($to, $subject, $message);
		
		
		
	}
	
	function branchDetails($email)
	{
		return $this->db->query("select * from branch where email='$email'")->result_array();
	}
	
	
	
	
	function updateFaculty($teacher_id){
		$data['branch_id']=$this->session->userdata("branch_id");
		$name=$this->input->post("name");
		$data["Name"]=$name;
		$data["Designation"]=$this->input->post("designation");
		$data["phone"]=$this->input->post("phone");
		$data["qualification"]=$this->input->post("qaulification");
		$data["gender"]=$this->input->post("gender");
		//$data["specilization"]=$this->input->post("specilization");
		//$email=$this->input->post("email");
		//$data["email"]=$email;
		$data["temporary"]=$this->input->post("temp");
		$data["permanent"]=$this->input->post("permanent");
		$url=$this->input->post("url");
		if(!empty($url)){
			$emptyUrl=$this->db->query("select * from teacher where teacher_id=$teacher_id ")->result_array();
			foreach ($emptyUrl as $row){
				$url=$row["profile_url"];
			}
			unlink($url);
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
	}
		$this->db->set($data);
		$this->db->where("teacher_id",$teacher_id);
		$this->db->update("teacher",$data);
		//$this->db->where("teacher_id",$teacher_id);
		
		
	}
	
	
	function updateStaff($staff_id){
		$data['branch_id']=$this->session->userdata("branch_id");
		$data["Name"]=$this->input->post("Name");
		$data["designation"]=$this->input->post("designation");
		$data["phone"]=$this->input->post("mobile");
		$data["qualification"]=$this->input->post("qualification");
		$data["gender"]=$this->input->post("gender");
		//$data["specilization"]=$this->input->post("specilization");
		//$email=$this->input->post("email");
		//$data["email"]=$email;
		$data["email"]=$this->input->post("email");
		$data["joining_date"]=$this->input->post("joining_date");
		$data["tempAddress"]=$this->input->post("tempAddress");
		$data["address"]=$this->input->post("address");
		$url=$this->input->post("url");
		if(!empty($url)){
			$emptyUrl=$this->db->query("select * from staff where staff_id=$staff_id ")->result_array();
			foreach ($emptyUrl as $row){
				$url=$row["profile_url"];
			}
			unlink($url);
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
	}
		$this->db->set($data);
		$this->db->where("staff_id",$staff_id);
		$this->db->update("staff",$data);
		//$this->db->where("teacher_id",$teacher_id);
		
		
	}
	
	
	
	function updatestudent($student_id){
		$data['branch_id']=$this->session->userdata("branch_id");
		$data["Name"]=$this->input->post("Name");		
		$data["mobile"]=$this->input->post("mobile");
		$data["session"]=$this->input->post("session");
		$data["gender"]=$this->input->post("gender");		
		$data["temp"]=$this->input->post("temp");
		$data["permanent"]=$this->input->post("permanent");
		$url=$this->input->post("url");
		if(!empty($url)){
			$emptyUrl=$this->db->query("select * from student where student_id=$student_id ")->result_array();
			foreach ($emptyUrl as $row){
				$url=$row["profile_url"];
			}
			unlink($url);
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
	}
		$this->db->set($data);
		$this->db->where("student_id",$student_id);
		$this->db->update("student",$data);
		//$this->db->where("teacher_id",$teacher_id);
		
		
	}
	
	
	public function addnewFaculty()
	{$alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$password =substr(str_shuffle($alpha_numeric), 0,4);
		$data['branch_id']=$this->session->userdata("branch_id");
		$name=$this->input->post("name");
		$data["Name"]=$name;
		$data["Designation"]=$this->input->post("designation");
		$data["phone"]=$this->input->post("phone");
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
		$this->db->insert("teacher",$data);
		
		$data1['email']=$email;
		$data1['name']=$name;
		$data1['password']=$password;
		$data1['role_type']="Teacher";
		$data1['is_verify']=0;
		$data1['isActive']=0;
		$this->db->insert("login",$data1);
		
		$to=$email;
		$subject="Welcome to school Management system for login ";
		$message="Your user name=".$email ."<br> Your Password is =".$password;
		$this->send_mail($to, $subject, $message);
		
		
	}
	public function addnewstaff()
	{//$alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	//$password =substr(str_shuffle($alpha_numeric), 0,4);
	$data['branch_id']=$this->session->userdata("branch_id");
	$name=$this->input->post("name");
	$data["Name"]=$name;
	$data["designation"]=$this->input->post("designation");
	$data["phone"]=$this->input->post("phone");
	$data["qualification"]=$this->input->post("qualification");
	$data["gender"]=$this->input->post("gender");
	//$data["specilization"]=$this->input->post("specilization");
	$email=$this->input->post("email");
	$data["email"]=$email;
	$data["tempAddress"]=$this->input->post("temp");
	$data["address"]=$this->input->post("permanent");
	$data["joining_date"]=$this->input->post("joining");
	
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
		
		}else echo $this->upload->display_errors();
	$this->db->insert("staff",$data);
	/*
	$data1['email']=$email;
	$data1['name']=$name;
	$data1['password']=$password;
	$data1['role_type']="Teacher";
	$data1['is_verify']=0;
	$data1['isActive']=0;
	$this->db->insert("login",$data1);
	
	$to=$email;
	//$subject="Welcome to school Management system for login ";
	$message="Your user name=".$email ."<br> Your Password is =".$password;
	$this->send_mail($to, $subject, $message);
	*/
	
	}
	public function addnewStudent()
	{$alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	$password =substr(str_shuffle($alpha_numeric), 0,4);
	$data['branch_id']=$this->session->userdata("branch_id");
	$name=$this->input->post("name");
	$data["Name"]=$name;
	//$data["Designation"]=$this->input->post("designation");
	$data["mobile"]=$this->input->post("phone");
	$data["class_id"]=$this->input->post("class_id");
	$data["gender"]=$this->input->post("gender");
	$data["session"]=$this->input->post("session");
	$email=$this->input->post("email");
	$data["email"]=$email;
	$data["temp"]=$this->input->post("temp");
	$data["permanent"]=$this->input->post("permanent");
	
	$config['upload_path'] = './img/Student/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size']	= '150000';
	
	
	$this->load->library('upload', $config);
	
	if ($this->upload->do_upload('file'))
	{
		$doc=$this->upload->data();
		$document=$doc['file_name'];
		$url="img/Student/".$document;
		$data['profile_url']=$url;
	
	}else echo $this->upload->display_errors();
	$this->db->insert("student",$data);
	
	$data1['email']=$email;
	$data1['name']=$name;
	$data1['password']=$password;
	$data1['role_type']="Student";
	$data1['is_verify']=0;
	$data1['isActive']=0;
	$this->db->insert("login",$data1);
	
	$to=$email;
	//$subject="Welcome to school Management system for login ";
	$message="Your user name=".$email ."<br> Your Password is =".$password;
	$this->send_mail($to, $subject, $message);
	
	
	}
	
	public function AllTeacher($branch_id)
	{
		return $this->db->query("Select * from teacher where branch_id=$branch_id")->result_array();
	}
	
	
	public function deletes($teacher_id)
	{
		$this->db->where('teacher_id','$teacher_id');
		$this->db->delete('teacher');
	}
	
	
	
	public function RemoveTeacherFroMLogin($email){
		$this->db->query("delete from login where email='$email' ");
		
	}
	public function teacherMail($teacher_id)
	{
		return $this->db->query("select * from teacher where teacher_id=$teacher_id")->result_array();
	}
	
	public function staffMail($staff_id)
	{
		return $this->db->query("select * from staff where staff_id=$staff_id")->result_array();
	}
	
	public function studentMail($student_id)
	{
		return $this->db->query("select * from student where student_id=$student_id")->result_array();
	}
	
	public function Search()
	{
		$key=$this->input->post("key");
		return $this->db->query("select * from teacher where Name LIKE '$key%' OR phone LIKE '$key%' OR email LIKE '$key%'")->result_array();
	}
	
	
	public function StudentSearch()
	{
		$key=$this->input->post("key");
		return $this->db->query("select * from student where Name LIKE '$key%'")->result_array();
	}
	
	public function getClass()
	{
		$branch_id=$this->session->userdata('branch_id');
		return $this->db->query("select * from class where branch_id=$branch_id")->result_array();
		
		
	}
	public function getTeacherClass()
	{
		$branch_id=$this->session->userdata('branch_id');
		$teacher_id=$this->session->userdata('userid');
		return $this->db->query("select DISTINCT timetable.class_id ,class.name from timetable INNER JOIN periods ON timetable.id=periods.timetable_id  INNER JOIN class ON class.class_id=timetable.class_id where timetable.branch_id=$branch_id AND periods.teacher_id=$teacher_id")->result_array();
	
	
	}
	public function getClassStudent()
	{
		$branch_id=$this->session->userdata('branch_id');
		$student_id=$this->input->post('id');
		return $this->db->query("select * from student where branch_id='$branch_id' AND class_id=$student_id")->result_array();
		
	}
	
	function TeacherTakeStudentAttendence()
	{
		$data['branch_id']=$this->session->userdata('branch_id');
		$data['teacher_id']=$this->session->userdata('userid');
		$data['class_id']=$this->input->post("class_id");
		$data['student_id']=$this->input->post("student_id");
		
		$data['status']=$this->input->post("status");
		$data['subject_id']=$this->input->post("subject_id");
		$data['time']=date('H:i');
		$this->db->insert('attendence',$data);
	}
	
	function getTeacher()
	{
		$branch_id=$this->session->userdata('branch_id');
		return $this->db->query("select * from teacher where branch_id=$branch_id")->result_array();
	}
	function getSubject()
	{
	//	$branch_id=$this->session->userdata('branch_id');
		return $this->db->query("select * from subject")->result_array();
	}
	function generateTimeTable()
	
	{
		$i=0;
		$branch_id=$this->session->userdata("branch_id");
		$periods=$this->input->post("periods");
		$class=$this->input->post("classs");
		$section=$this->input->post("section");
		$data=array(
				"branch_id"=>$branch_id,
				"class_id"=>$class,
				"section_id"=>$section,
		);
		//$this->input->post("section");
		$this->db->insert("timetable",$data);
		$timetableId=$this->db->insert_id();
		for($i=1;$i<=$periods;$i++){
			for($j=1;$j<=6;$j++){
			$data1=array(
				"teacher_id"=>$this->input->post("teacher".$i),
				"subject_id"=>$this->input->post("subject".$i),
				"startTime"=>$this->input->post("t".$i),
				"end_time"=>$this->input->post("t".($i+1)),
					"day_id"=>$j,
					"period"=>$i,
					"timetable_id"=>$timetableId,
				);
			$this->db->insert("periods",$data1);
		}
	}
		
	}
	
	function getTimeTableDetails(){
		$user=$this->session->userdata("userid");
		$branch_id=$this->session->userdata("branch_id");
		//$condition = array('teacher{_id' => $user, '' => $title, 'status' => $status);
		$this->db->select('*');
		$this->db->from('periods');
		$this->db->join('timetable', 'periods.timetable_id = timetable.id');
		$this->db->where('teacher_id',$user);
		$query = $this->db->get()->result_array();
		return $query;
	}
	
	function tempReport($college_id){
		
		$branch=$this->db->query("select * from branch where college_id=$college_id")->result_array();
		echo "helllo";
		foreach ($branch as $row)
		{echo "helllo2";
			$branch_id=$row['branch_id'];
			$branchName=$row["branch_name"];
			$date=date("Y/m/d");
			$result=$this->db->query("select * from attendence where branch_id=$branch_id AND status=0 AND date=$date")->result_array();
			$count=0;
			foreach ($result as $row2){
				$count++;
			}
			
			$to="contactsushil7@gmail.com";
			$subject="Absent student ";
			$message= "Total" .$count." are absent in ".$branchName;
			$this->send_mail($to, $subject, $message);
			echo "helllo";
		}
		
	}
}