<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->model('admin_model');
		//$this->load->database();
		$this->load->library('session');
		
		
	}
	
	public function index()
	{
		
		$this->load->view('login');
		$this->load->view('js');
		
	}
	
	

	public function GetClassStudent()
	{
		$result = $this->admin_model->GetClassStudents();
		$output="";
		$output.='<option value="0">Choose a Student</option>';
		foreach ($result as $row) {
			# code...
				$output.=' <option value="'.$row['student_id'].'">'.$row['fname'].' '.$row['lname'].'</option>';
		}
		echo $output;
//echo "sushil";
		//print_r($result);
	}

public function GetClassStudentss()
	{
		$result = $this->admin_model->GetClassStudentss();
		$output="";
		$output.='<option value="0">Choose a Student</option>';
		foreach ($result as $row) {
			# code...
				$output.=' <option value="'.$row['student_id'].'">'.$row['fname'].' '.$row['lname'].'</option>';
		}
		echo $output;
//echo "sushil";
		//print_r($result);
	}


	function addnewInventory()
	{

		$this->admin_model->addnewInventory();
		redirect('admin/newInventory');
	}
	public function Registration()
	{
		$this->admin_model->Registration();
		//echo "hello";
		redirect("admin/index");
		
	}
	public function home()
	{
		
		$user=$this->session->userdata("userid");
		if($user){
		$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		
		$this->load->view('header',$data);
		$this->load->view('adminHome');
		$this->load->view('js');
		}
		else{
			redirect('admin/index_page');
		}
		
	}
	
	public function Authentication()
	{
		$result=$this->admin_model->Authentication();
		$data["loginPersonInfo"]=$result;
		$branch_id="";
		if(!empty($result))
		{
				//echo "login successfull";
			foreach ($result as $row){
				$user_id=$row['user_id'];
				$email=$row['email'];
				$role_type=$row['role_type'];
				$branch_id=$row['branch_id'];
			}
			if($role_type=='Branch_Admin'){
				$results=$this->admin_model->branchDetails($email);
				foreach ($results as $row)
				{
					$branch_id=$row['branch_id'];
					$this->session->set_userdata('branch_id',$branch_id);
				}
			
		
			}
			else
				$this->session->set_userdata('branch_id',$branch_id);
					
				$data["teacher_id"]=$user_id;
				$data["branch_id"]=$branch_id;
				
			$this->session->set_userdata('role_type',$role_type);
			$this->session->set_userdata('userid',$user_id);
			redirect('admin/home');
		}
		else
		{
				redirect('admin/index');
		}
		
		

	}
	public function playGame(){
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Student"){
		$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$data["game"]=$this->admin_model->playGame();
		$this->load->view('header',$data);
		$this->load->view('game',$data);
		$this->load->view('js');
		}
		else{
			redirect('admin/index_page');
		}
	}
	public function blog(){
		$user=$this->session->userdata("userid");
		if($user){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			//$data["game"]=$this->admin_model->playGame();
			$this->load->view('header',$data);
			$this->load->view('blog',$data);
			$this->load->view('js');
		}
		else{
			redirect('admin/index');
		}
	}
	
	public function allBlog(){
		$user=$this->session->userdata("userid");
		if($user){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$data["blog"]=$this->admin_model->getBlogs();
			$this->load->view('header',$data);
			$this->load->view('AllBlog',$data);
			$this->load->view('js');
		}
		else{
			redirect('admin/index');
		}
	}
	
	public function submitBlog()
	{
		$user=$this->session->userdata("userid");
		if($user){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
				$error=$this->admin_model->submitBlog();
				redirect("admin/blog");
		}	else{
					redirect('admin/index');
				}	
	}
	function editBlog($id)
	{	$user=$this->session->userdata("userid");
		if($user!=""){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$data["blog"]=$this->admin_model->getsingleBolgDetails($id);
			
			$this->load->view('header',$data);
			$this->load->view('editblog',$data);
			$this->load->view('js');

		}

	}

	function viewBlogDetail()
	{
		$id=$this->input->post("id");
		$result=$this->admin_model->getsingleBolgDetails($id);
		$output="";
		foreach ($result as $row) {
			$output.='<h5> Blog Title</h5>
			<span> '.$row['headline'].'</span>
			<h5> Blog Content</h5>
			<span> '.$row['description'].'</span>'

			;
		}
		echo $output;

	}

	function deleteBlog()
	{
		$this->admin_model->deleteBlog();
	}

	function updateBlog($id){
		$this->admin_model->updateBlog($id);
		redirect('admin/allBlog');
	}
	public function newFaculty()
	{$user=$this->session->userdata("userid");
		if($user!=""){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('newFaculty');
		$this->load->view('js');
		}	else{
			redirect('admin/index');
		}
	}
	
	public function newStudent()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$data['class_id']=$this->admin_model->getClass();
			$this->load->view('header',$data);
		$this->load->view('newStudent');
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}
	
	public function newStaff()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('newStaff');
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}


	public function AlluminiEntry()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('AlluminiEntry');
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}
	
	
	
	public function viewFaculty()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user !="" && $role_type=="Branch_Admin"){
			$branch_id=$this->session->userdata("branch_id");
			
			$data['teachers']=$this->admin_model->AllTeacher($branch_id);
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('viewFaculty',$data);
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
		
	}
	
	
	public function viewStudent()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$data["studentList"]=$this->admin_model->GetStudentList();
		$this->load->view('header',$data);
		$this->load->view('viewStudent',$data);
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}



	public function viewexstudent()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$data["exstudentList"]=$this->admin_model->getexstudentList();
		$this->load->view('header',$data);
		$this->load->view('viewexstudent',$data);
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}

	
	public function viewStaff()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$data["StaffList"]=$this->admin_model->GetStaffDetails();
		$this->load->view('header',$data);
		$this->load->view('viewStaff');
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}
	


public function view_ex_staff()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$data["exStaffList"]=$this->admin_model->GetexStaffDetails();
		$this->load->view('header',$data);
		$this->load->view('view_ex_staff');
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}

	public function Ex_Faculty()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('Ex_Faculty');
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}
	
	public function Ex_Staff()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('Ex-Staff');
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}
	
	public function Allumini()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('Allumini');
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}
	
	public function myhomework()
	{
		$user=$this->session->userdata("userid");
		if($user){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$this->load->view('header',$data);
			$this->load->view('myHomework');
			$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}
	
	public function NewStudentEntry()
	{
		$this->admin_model->addnewstudent();
		redirect("admin/newStudent");
	}
	
	public function StudentFeePayment()
	{
		
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$this->load->view('header',$data);
			$this->load->view('feePayments');
			$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}
	
	
	public  function logout()
	{
		$userid=$this->session->userdata("userid");
		$this->admin_model->loguot($userid);
		$this->session->unset_userdata("userid");
		$this->session->unset_userdata("branch_id");
		$this->session->unset_userdata("role_type");
		redirect('admin/index');
	}
	
	public function StudentAttendence()
	{
		$user=$this->session->userdata("userid");
		$branch_id=$this->session->userdata("branch_id");
		if($user !=""){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$data['student']="";
			$data['class']=$this->admin_model->getTeacherClass();
			//$result=$this->admin_model->getTimeTableDetails();
			
			$this->load->view('header',$data);
			$this->load->view('Student_attendence');
			$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}

	//function to retrieve the student record for attendance

	function studentRecordForAttendance(){

		$result=$this->admin_model->studentRecordForAttendance();
		//print_r($result);
		$output="";
		$count=1;
		foreach ($result as $row) {
			$output.='<tr>
							<td>'.$count.'</td>
						
                         <td><a href="#bModal" data-toggle="modal" id="'.$row['student_id'].'"  onClick="viewStudentDetails(this.id)">'.$row["fname"]." ". $row["lname"].'</a></td>
                         <td>
							<input type="checkbox" name="studentList[]" value="'.$row['student_id'].'"/>
						</td>
						</tr>';
						$count++;	
										
		}
		echo $output;
	}

	function submitAttendence()
	{
		
		$branch_id=$this->session->userdata('branch_id');
		$teacher_id=$this->session->userdata('userid');
		$class_id=$this->input->post("classs");
		$studentList=$this->input->post("studentList");
		$status="Present";
		$subject_id=$this->input->post("subject");
		$section_id=$this->input->post("section");
		$times=date('H:i');
		$dat=date('Y/m/d');
		for($i=0;$i<sizeof($studentList);$i++)
		{
			//echo $studentList[$i];
			$this->admin_model->TeacherTakeStudentAttendence($branch_id,$teacher_id,$class_id,$status,$subject_id,$section_id,$times,$dat,$studentList[$i]);
		}
		
		//echo $teacher_id;
		redirect('admin/StudentAttendence');
	}
	
	public function view_attendence()
	{
		$user=$this->session->userdata("userid");
		if($user !=""){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$this->load->view('header',$data);
			$this->load->view('view_attendence');
			$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}
	
	public function teacher_attendence()
	{
		$user=$this->session->userdata("userid");
		if($user){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$this->load->view('header',$data);
			$this->load->view('teacher_attendence');
			$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}
	
	
	public function FeeDetails()
	{
		$user=$this->session->userdata("userid");
		if($user){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$this->load->view('header',$data);
			$this->load->view('FeeDetails');
			$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}
	
	public function report()
	{
	$user=$this->session->userdata("userid");
		if($user){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$this->load->view('header',$data);
			$this->load->view('report');
			$this->load->view('js');
		}else{
			redirect('admin/index');
		}
		
		
	}
	
	public function college()
	{
		
		$user=$this->session->userdata("userid");
		if($user){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$this->load->view('header',$data);
			$this->load->view('college');
			$this->load->view('js');
		}else{
			redirect('admin/index');
		}
		
	}
	public function newCollege()
	{
		$this->admin_model->newCollege();
		redirect("admin/college");
	}
	
	public function branches()
	{
	$user=$this->session->userdata("userid");
		if($user){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$data["college"]=$this->admin_model->getCollege($user);
			$this->load->view('header',$data);
			$this->load->view('branches',$data);
			$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}
	
	public function newBranch()
	{
		$this->admin_model->newBranch();
		redirect("admin/branches");
	}
	
	public function addnewFaculty()
	{
		$this->admin_model->addnewFaculty();
		redirect("admin/newFaculty");
	}
	
	
	
	public function FeePayment()
	{
		$this->admin_model->addnewFaculty();
		redirect("admin/feePayments");
	}
	
	
	public function addnewstaff()
	{
		$this->admin_model->addnewstaff();
	//	redirect("admin/newStaff");
	}

	public function addnewexstaff()
	{
		$this->admin_model->addnewexstaff();
		redirect("admin/new_ex_staff");
	}


public function new_ex_staff()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('new_ex_staff');
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}


	public function addnewStudent()
	{
		$this->admin_model->addnewStudent();
		redirect("admin/newStudent");
	}
	



	public function exaddnewStudent()
	{
		$this->admin_model->exaddnewStudent();
		redirect("admin/ex_newstudent");
	}


	public function ex_newStudent()
	{
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$data['class_id']=$this->admin_model->getClass();
			$this->load->view('header',$data);
		$this->load->view('ex_student');
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}



	public function deletes()
	{
		$teacher_id=$this->input->post("id");
		$result=$this->admin_model->teacherMail($teacher_id);
		foreach ($result as $row){
			$email=$row["email"];
			$url='./'.$row["profile_url"];
		}
		$this->admin_model->deletes($teacher_id);
		$this->admin_model->RemoveTeacherFroMLogin($email);
		unlink("$url");
		
	}
	
	public function ViewFacultyDetail(){
		$teacher_id=$this->input->post("id");
		$result=$this->admin_model->teacherMail($teacher_id);
		$output="";
		foreach ($result as $row)
		{
			$output.='<div class="block-fluid">
			
			<table cellpadding="0" cellspacing="0" width="100%" class="sTable">
			<tbody>
			 
			
			<tr>
			<td align="center">';
			$output.='<img src="'.  base_url().$row['profile_url'].'" class="img-polaroid" height="100px"  width="100px">';
			$output.='<address>'.$row['Name'].	'<br>'.
			'<a href="mailto:#">'.$row['email'].'</a>
			<address>
			<strong>'.$row["permanent"].'<br>
			<abbr title="Phone">P:</abbr>'.$row['phone'].'
			</address>
			</address>
			
			<button class="btn btn-primary tipl" data-original-title="Send message"><span class="icon-envelope icon-white"></span></button>
			<button class="btn btn-primary tipl" data-original-title="Edit"><span class="icon-pencil icon-white"></span></button>
			<button class="btn btn-primary tipl" data-original-title="Remove"><span class="icon-remove icon-white"></span></button>
			
			</td>
			</tr>
			
			</tbody>
			</table>
			
			</div>';
			
			echo $output;
		}
	}
	

	public function ViewexFacultyDetail(){
		$teacher_id=$this->input->post("id");
		$result=$this->admin_model->exteacherMail($teacher_id);
		$output="";
		foreach ($result as $row)
		{
			$output.='<div class="block-fluid">
			
			<table cellpadding="0" cellspacing="0" width="100%" class="sTable">
			<tbody>
			 
			
			<tr>
			<td align="center">';
			$output.='<img src="'.  base_url().$row['profile_url'].'" class="img-polaroid" height="100px"  width="100px">';
			$output.='<address>'.$row['Name'].	'<br>'.
			'<a href="mailto:#">'.$row['email'].'</a>
			<address>
			<strong>'.$row["permanent"].'<br>
			<abbr title="Phone">P:</abbr>'.$row['phone'].'
			</address>
			</address>
			
			<button class="btn btn-primary tipl" data-original-title="Send message"><span class="icon-envelope icon-white"></span></button>
			<button class="btn btn-primary tipl" data-original-title="Edit"><span class="icon-pencil icon-white"></span></button>
			<button class="btn btn-primary tipl" data-original-title="Remove"><span class="icon-remove icon-white"></span></button>
			
			</td>
			</tr>
			
			</tbody>
			</table>
			
			</div>';
			
			echo $output;
		}
	}


	
	public function ViewStaffDetail(){
		$staff_id=$this->input->post("id");
		$result=$this->admin_model->staffMail($staff_id);
		$output="";
		foreach ($result as $row)
		{
			$output.='<div class="block-fluid">
			
			<table cellpadding="0" cellspacing="0" width="100%" class="sTable">
			<tbody>
			 
			
			<tr>
			<td align="center">';
			$output.='<img src="'.  base_url().$row['profile_url'].'" class="img-polaroid" height="100px"  width="100px">';
			$output.='<address>'.$row['Name'].	'<br>'.
			'<a href="mailto:#">'.$row['email'].'</a>
			<address>
			<strong>'.$row["joining_date"].'<br>
			<abbr title="Phone">P:</abbr>'.$row['phone'].'
			</address>
			</address>
			
			<button class="btn btn-primary tipl" data-original-title="Send message"><span class="icon-envelope icon-white"></span></button>
			<button class="btn btn-primary tipl" data-original-title="Edit"><span class="icon-pencil icon-white"></span></button>
			<button class="btn btn-primary tipl" data-original-title="Remove"><span class="icon-remove icon-white"></span></button>
			
			</td>
			</tr>
			
			</tbody>
			</table>
			
			</div>';
			
			echo $output;
		}
	}
	
	
	public function ViewStudentDetail(){
		$student_id=$this->input->post("id");
		$result=$this->admin_model->studentMail($student_id);
		$output="";
		foreach ($result as $row)
		{
			$output.='<div class="block-fluid">
			
			<table cellpadding="0" cellspacing="0" width="100%" class="sTable">
			<tbody>
			 
			
			<tr>
			<td align="center">';
			$output.='<img src="'.  base_url().$row['profile_url'].'" class="img-polaroid" height="100px"  width="100px">';
			$output.='<address>'.$row['Name'].	'<br>'.
			'<a href="mailto:#">'.$row['email'].'</a>
			<address>
			<strong>'.$row["permanent"].'<br>
			<abbr title="Phone">P:</abbr>'.$row['mobile'].'
			</address>
			</address>
			
			<button class="btn btn-primary tipl" data-original-title="Send message"><span class="icon-envelope icon-white"></span></button>
			<button class="btn btn-primary tipl" data-original-title="Edit"><span class="icon-pencil icon-white"></span></button>
			<button class="btn btn-primary tipl" data-original-title="Remove"><span class="icon-remove icon-white"></span></button>
			
			</td>
			</tr>
			
			</tbody>
			</table>
			
			</div>';
			
			echo $output;
		}
	}
	
	
	
	public function EditFacultyDetail()
	{
		$teacher_id=$this->input->post("id");
		
		$result=$this->admin_model->teacherMail($teacher_id);
		$output="";
		foreach ($result as $row)
		{
			$output.='<form action="'. site_url('admin/updateFaculty/'.$row['teacher_id']).'" method="post" enctype="multipart/form-data">';
			$output.='<div class="">
			
			<div class="widget">
			<div class="head">
			<div class="icon"><i class="icos-pencil2"></i></div>
			<h2>Details</h2>
			</div>
			<div class="block-fluid">
			
			<div class="row-form">
			
			
			<div class="span2">Name</div>
			<div class="span3"><input type="text" name="name" placeholder="Enter staff name" value="'. $row['Name'].'"></div>
			
			</div>
			
			
			<div class="row-form">
			<div class="span2">Designation</div>
			<div class="span3"><input type="text" name="designation" placeholder="Enter staff designation" value="'. $row['Designation'].'"></div>
			 
			<div class="span2">Qualification</div>
			<div class="span3"><input type="text" name="qaulification" placeholder="Enter qualification" value="'. $row['qualification'].'"></div>
			
			</div>
			 
			<div class="row-form">
			<div class="span2">Specilization</div>
			<div class="span3"><input type="text" name="specilization"placeholder="Specilization in" value="'. $row['specilization'].'"></div>
			 
			<div class="span2">Email</div>
			<div class="span3">
			<div class="input-prepend">
			<span class="add-on"><i class="icosg-mail1"></i></span>
			<input disabled type="text" style="width: 209px;" name="email"  placeholder="Enter email" required value="'. $row['email'].'">
			</div>
			
			</div>
			 
			
			</div>
			<div class="row-form">
			<div class="span2">Phone</div>
			<div class="span3">
			<div class="input-prepend">
			<span class="add-on"><i class="icosg-phone"></i></span>
			<input type="text" style="width: 209px;"  name="phone"placeholder="Enter phone number" value="'. $row['phone'].'">
			</div>
			</div>
			<div class="span2">Gender</div>
			<div class="span3">';
			if($row["gender"]=="Male"){
			$output.='<input type="radio" checked="checked" name="gender" value="Male" >Male
			
			<input type="radio"  name="gender" value="Female" >Female';
			}else {
				
				$output.='<input type="radio"  name="gender" value="Male" >Male
		
			<input type="radio"  name="gender" checked value="Female" >Female';
					
			}
			
			$output.='</div>
			 
			 
			</div>
			
			<div class="row-form">
			<div class="span2">Image</div>
			<div class="span3">
			<div class="input-append file">
			<input type="file" name="file" style="width: 160px;" >
			<input type="text" name="url" style="width: 174px;">
			<button class="btn btn-sm">Browse</button>
			</div>
			</div>
			
			<div class="span2">Joining Date</div>
			<div class="span3">
			<input type="text" value="'. $row['phone'] .'" name="date"class="datepicker hasDatepicker" id="dp1453972527352" style="width:209px;">
			</div>
			 
			</div>
			
			<div class="row-form">
			<div class="span2">Temporary address</div>
			<div class="span3"><textarea  name="temp" placeholder="Placeholder example" >'. $row['temporary'].'</textarea></div>
			<div class="span2">Permanent address</div>
			<div class="span3"><textarea  name="permanent"placeholder="Placeholder example" >'. $row['permanent'].'</textarea></div>
			
			</div>
			
			<div class="toolbar bottom TAL">
			<div class="span2"> <input class="btn btn-large btn-block btn-primary" type="submit" value="Submit"></div>
			</div>
			
			</div>
			</div>
			
			</div>
			
			</form>';
			
		}
		echo $output;
	}
	
	
	public function EditStudentDetail()
	{
		$student_id=$this->input->post("id");
		
		$result=$this->admin_model->studentMail($student_id);
		$output="";
		foreach ($result as $row)
		{
			$output.='<form action="'. site_url('admin/updatestudent/'.$row['student_id']).'" method="post" enctype="multipart/form-data">';
			$output.='<div class="">
			
			<div class="widget">
			<div class="head">
			<div class="icon"><i class="icos-pencil2"></i></div>
			<h2>Details</h2>
			</div>
			<div class="block-fluid">
			
			
			<div class="row-form">
			<div><b>Name</b></div>
			<div><input type="text" name="Name" placeholder="Enter the student name" value="'. $row['Name'].'"></div><br>
			<div><b>Gender</b></div>
			<div><input type="text" name="gender" placeholder="Gender" value="'. $row['gender'].'"></div>			
			</div>
			
			
			<div class="row-form">
			 
			<div><b>Session</b></div>
			<div><input type="text" name="qaulification" placeholder="Session" value="'. $row['session'].'"></div><br>						
			<div><b>Phone</b></div>
			<div><input type="text" name="specilization"placeholder="Phone number" value="'. $row['mobile'].'">
			</div></br>
			
			<div><b>Email</b></div>
			<div><input type="text" name="email"placeholder="Email" value="'. $row['email'].'">
			</div>			 			 
			
        </div>
			 
			<div class="row-form">
			
			<div><b> Gender </b></div>
			<div>';
			if($row["gender"]=="Male"){
			$output.='<input type="radio" checked="checked" name="gender" value="Male" >Male
			
			<input type="radio"  name="gender" value="Female" >Female';
			}else {				
			$output.='<input type="radio"  name="gender" value="Male" >Male	
			<input type="radio"  name="gender" checked value="Female" >Female';				
			}
			
			$output.='
			</div><br>
			 
			 
			<div><b>Image </b></div>
			<div>
			<div class="input-append file">
			<input type="file" name="file" style="width: 160px;" >
			<input type="text" name="url" style="width: 174px;">
			<button class="btn btn-sm">Browse</button>
			</div>
			</div>
			
			 
			</div>
			
			<div class="row-form">
			<div><b>Temporary address</b></div>
			<div><textarea  name="temp" placeholder="Temporary Address" >'. $row['temp'].'</textarea></div><br>
			<div> <b>Permanent address </b></div>
			<div><textarea  name="permanent"placeholder="Permanent Address" >'. $row['permanent'].'</textarea></div>
			
			</div>
			
			<div class="toolbar bottom TAL">
			<div> <input class="btn btn-large btn-block btn-primary" type="submit" value="Submit"></div><br>
			<div> <input class="btn btn-danger btn-block btn-large" type="close" value="Close"></div>
			
			</div>
			
			</div>
			</div>
			
			</div>
			
			</form>';
			
		}
		echo $output;
	}
	
	
	
	public function EditStaffDetail()
	{
		$staff_id=$this->input->post("id");
		
		$result=$this->admin_model->staffMail($staff_id);
		$output="";
		foreach ($result as $row)
		{
			$output.='<form action="'. site_url('admin/updateStaff/'.$row['staff_id']).'" method="post" enctype="multipart/form-data">';
			$output.='<div class="">
			
			<div class="widget">
			<div class="head">
			<div class="icon"><i class="icos-pencil2"></i></div>
			<h2>Details</h2>
			</div>
			<div class="block-fluid">
			
			
			<div class="row-form">
			<div><b>Name</b></div>
			<div><input type="text" name="Name" placeholder="Enter the student name" value="'. $row['Name'].'"></div><br>
			<div><b>Designation</b></div>
			<div><input type="text" name="designation" placeholder="Gender" value="'. $row['designation'].'"></div>			
			</div>
			
			
			<div class="row-form">
			 
			<div><b>Qualification</b></div>
			<div><input type="text" name="qualification" placeholder="Session" value="'. $row['qualification'].'"></div><br>						
			<div><b>Phone</b></div>
			<div><input type="text" name="mobile" placeholder="Phone number" value="'. $row['phone'].'">
			</div></br>
			
			<div><b>Email</b></div>
			<div><input type="text" name="email"placeholder="Email" value="'. $row['email'].'">
			
			<div><b>Joining Date</b></div>
			<div><input type="text" name="joining_date"placeholder="Email" value="'. $row['joining_date'].'">
			</div>			 			 
			
        </div>
			 
			<div class="row-form">
			
			<div><b> Gender </b></div>
			<div>';
			if($row["gender"]=="Male"){
			$output.='<input type="radio" checked="checked" name="gender" value="Male" >Male
			
			<input type="radio"  name="gender" value="Female" >Female';
			}else {				
			$output.='<input type="radio"  name="gender" value="Male" >Male	
			<input type="radio"  name="gender" checked value="Female" >Female';				
			}
			
			$output.='
			</div><br>
			 
			 
			<div><b>Image </b></div>
			<div>
			<div class="input-append file">
			<input type="file" name="file" style="width: 160px;" >
			<input type="text" name="url" style="width: 174px;">
			<button class="btn btn-sm">Browse</button>
			</div>
			</div>
			
			 
			</div>
			
			<div class="row-form">
			<div><b>Temporary address</b></div>
			<div><textarea  name="tempAddress" placeholder="Temporary Address" >'. $row['tempAddress'].'</textarea></div><br>
			<div> <b>Permanent address </b></div>
			<div><textarea  name="address" placeholder="Permanent Address" >'. $row['address'].'</textarea></div>
			
			</div>
			
			<div class="toolbar bottom TAL">
			<div> <input class="btn btn-large btn-block btn-primary" type="submit" value="Submit"></div><br>
			<div> <input class="btn btn-danger btn-block btn-large" type="close" value="Close"></div>
			
			</div>
			
			</div>
			</div>
			
			</div>
			
			</form>';
			
		}
		echo $output;
	}
	 
	 
	
	public function search()
	{
		$result=$this->admin_model->search();
		$output="";
		if(!empty($result)){
		foreach ($result as $row){
			$output.='<tr class="'."s".$row['teacher_id'].'">
					<td><input type="checkbox" name="order[]" value="'.$row['teacher_id'].'"/></td>
							<td><a href="#bModal" data-toggle="modal" id="'. $row['teacher_id'].'"  onClick="view(this.id)">'.$row["Name"].'</a></td>
			                                        <td>Robotics</td>
			                                        <td><span class="label label-important">Robotics Developer</span></td>
			                                        <td>21/12/2015</td>
			                                        <td class="TAC">
			                                            <a class="action1 tip" title="View Detail" id="'. $row['teacher_id'].'"  onClick="view(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
			                                            <a class="action2" id="'.$row['teacher_id'].'"  onClick="edit(this.id);" href="#eModal" data-toggle="modal"><span class="icon-pencil"></span></a> 
			                                            <a class="action3 " id="'.$row['teacher_id'].'" onClick="deletes(this.id);" href="#"><span class="icon-trash"></span></a>
			                                        </td>
			                                    </tr>';
		}
		
		}
		else 
		{
			$output.= '<tr > <td>"No match found"</td></tr>';
		}
		echo $output;
	}
	
	
	public function StudentSearch()
	{$result=$this->admin_model->StudentSearch();
		$output="";
		if(!empty($result)){
		foreach ($result as $row){
			$output.='<tr class="'."s".$row['student_id'].'">
					<td><input type="checkbox" name="order[]" value="'.$row['student_id'].'"/></td>
							<td><a href="#bModal" data-toggle="modal" id="'. $row['student_id'].'"  onClick="view(this.id)">'.$row["Name"].'</a></td>
			                                        <td>Robotics</td>
			                                        <td><span class="label label-important">Robotics Developer</span></td>
			                                        <td>21/12/2015</td>
			                                        <td class="TAC">
			                                            <a class="action1 tip" title="View Detail" id="'. $row['student_id'].'"  onClick="view(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
			                                            <a class="action2" id="'.$row['student_id'].'"  onClick="edit(this.id);" href="#eModal" data-toggle="modal"><span class="icon-pencil"></span></a> 
			                                            <a class="action3 " id="'.$row['student_id'].'" onClick="deletes(this.id);" href="#"><span class="icon-trash"></span></a>
			                                        </td>
			                                    </tr>';
		}
		
		}
		else 
		{
			$output.= '<tr > <td>"No match found"</td></tr>';
		}
		echo $output;
	}
	
	
	public function timeTable()
	{$user=$this->session->userdata("userid");
	if($user){
		$data['class']=$this->admin_model->getClass();
		$data['teacher']=$this->admin_model->getTeacher();
		$data['subject']=$this->admin_model->getSubject();
		$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('timeTable');
		$this->load->view('js');
	}	else{
		redirect('admin/index');
	}
	}
	
	function TeacherTakeStudentAttendence()
	{
		$this->admin_model->TeacherTakeStudentAttendence();
	
	}
	
	function generateTimeTable()
	{
		$this->admin_model->generateTimeTable();
		redirect('admin/timeTable');
	}
	
	function updateFaculty($teacher_id){
		$this->admin_model->updateFaculty($teacher_id);
		
	}
	function updateStaff($staff_id){
		$this->admin_model->updateStaff($staff_id);
		
	}
	
	function updatestudent($student_id){
		$this->admin_model->updatestudent($student_id);
		
	}
	
	function tempReport()
	{
		$this->admin_model->tempReport(4);
		//echo "success";
	}

	function StudentReport(){

		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			//$branch_id=$this->session->userdata("branch_id");
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$data["academic_year"]=$this->admin_model->academicYear();
		$this->load->view('header',$data);
		$this->load->view('StudentReport',$data);
		$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}


	function studentReportS()
	{

		$academic_year=$this->input->post("years");
		$classes=$this->input->post("classes");
		$section=$this->input->post("section");
		$month=$this->input->post("month");
		$stu=$this->input->post("student");
		$output="";
		if($stu==0){
			if($month<=7){
			//$y=substr($academic_year,-4);
			$y=substr($academic_year,-4);
			$student=$this->admin_model->GetStudentLists($academic_year,$classes,$section);
		
				foreach ($student as $row) {
					for($j=1;$j<=31;$j++)
					{
						${$row["student_id"].$month.$j}=$this->admin_model->StudentAttendenceReportS($row['student_id'],$y,$month,$j);
					}
				}
		
		//$output="";
		$output.='<tr style="text-align:center;"><td>Jan</td></tr>';
		foreach ($student as $row){
		
			$output.='<tr><td>'.$row['fname'].$row['lname'].'</td>';
			for($j=1;$j<=31;$j++)
			{

				$output.='<td>'.${$row["student_id"].$month.$j}.'</td>' ;
			}
			$output.='</tr>';
		}
			
	}
	else{

					$y=substr($academic_year,0,4);
		$student=$this->admin_model->GetStudentLists($academic_year,$classes,$section);
		
		foreach ($student as $row) {
			for($j=1;$j<=31;$j++)
			{
				${$row["student_id"].$month.$j}=$this->admin_model->StudentAttendenceReportS($row['student_id'],$y,$month,$j);
			}
		}
		
		//$output="";
		$output.='<tr style="text-align:center;"><td>Jan</td></tr>';
		foreach ($student as $row) {
		
			$output.='<tr><td>'.$row['fname'].$row['lname'].'</td>';
			for($j=1;$j<=31;$j++)
			{

				$output.='<td>'.${$row["student_id"].$month.$j}.'</td>' ;
			}
			$output.='</tr>';
		}
	}	
	

	}
	else
	{
		
		if($month<=7){
			//$y=substr($academic_year,-4);
			$y=substr($academic_year,-4);
		for($j=1;$j<=31;$j++)
			{
				${$stu.$month.$j}=$this->admin_model->StudentAttendenceReportS($stu,$y,$month,$j);
			}


			$output.='<tr style="text-align:center;"><td>Jan</td></tr>';		
			$output.='<tr><td>'.$stu.'</td>';
			for($j=1;$j<=31;$j++)
			{

				$output.='<td>'.${$stu.$month.$j}.'</td>' ;
			}
		
			$output.='</tr>';
			
			//echo $y;
		}else
		{
			$y=substr($academic_year,0,4);
		for($j=1;$j<=31;$j++)
			{
				${$stu.$month.$j}=$this->admin_model->StudentAttendenceReportS($stu,$y,$month,$j);
			}


			$output.='<tr style="text-align:center;"><td>Jan</td></tr>';		
			$output.='<tr><td>'.$stu.'</td>';
			for($j=1;$j<=31;$j++)
			{

				$output.='<td>'.${$stu.$month.$j}.'</td>' ;
			}
			$output.='</tr>';
		}
			
			
	
		

		echo $output;
		//print_r($student);
	}
}


function newInventory()
{
	$user=$this->session->userdata("userid");
	$role_type=$this->session->userdata("role_type");
	if($user!="" && $role_type=="Branch_Admin"){
		$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$this->load->view('header',$data);
		$this->load->view('newInventory');
		$this->load->view('js');

	}
	else{
			redirect('admin/index');
		}

}

function ViewInventory()
{

	$user=$this->session->userdata("userid");
	$role_type=$this->session->userdata("role_type");
	if($user!="" && $role_type=="Branch_Admin"){
		$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
		$data["inventory"]=$this->admin_model->getInventory($user);
		$this->load->view('header',$data);
		$this->load->view('viewInventory');
		$this->load->view('js');

	}else{
			redirect('admin/index');
		}

}

function deletesInventory()
{
		$this->admin_model->deletesInventory();

}
function editInventory($id)
{
	$user=$this->session->userdata("userid");
	$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
	$data['inventory']=$this->admin_model->getSingleInventoryDetails($id);
	$this->load->view('header',$data);
	$this->load->view('editInventory',$data);
	$this->load->view('js');
}
function updateInventory($id)
{
	$this->admin_model->updateInventory($id);
	redirect('admin/viewInventory');
}

function viewInventoryDetails()
{

	//echo "<h1>hello dear </h1>";s
	$id=$this->input->post('id');
	$details=$this->admin_model->getSingleInventoryDetails($id);
	$output="";
	foreach ($details as $row) {
		$output.='<div class="block-fluid">
			
			<table cellpadding="0" cellspacing="0" width="100%" class="sTable">
			<tbody>
			 
			
			<tr>
			<td>';
			$output.='<img src="'.  base_url().'" class="img-circle" height="100px"  width="100px"></td>';
			$output.='<td>'. "<span>Reciept Number: ".$row['recipt_number'].'</span><br>'.
							"<span>Vendor: ".$row['vendor_name'].'</span><br>'.
							"<span>Expenses Category ".$row['expences_catogery'].'</span><br>'.

							"<span>Expenses Description :".$row['description_of_expence'].'</span><br>'.
							"<span>Payment Mode :".$row['mode_of_payment'].'</span><br>'.
			'</td>

			<td>

					'. "<span>Expense Amount: ".$row['expence_amount'].'</span><br>'.
							"<span>Tax: ".$row['tax'].'</span><br>'.
							"<span>Due Amount : ".$row['due_payment'].'</span><br>'.

							"<span>Due Payment date :".$row['payment_due_date'].'</span><br>'.
							"<span>Expense date :".$row['dates'].'</span><br>'.
			'
			
			</td>
			</tr>
				

			
			</tbody>
			</table>
			
			</div>';


	}
	echo $output;


}

function Inventory_search()
{

	$result=$this->admin_model->Inventory_search();
	$output="";
	foreach ($result as $row) {
		# code...

		$output.=' <tr class="'. "s".$row['id'].'">
                                        <td><input type="checkbox" name="order[]" value="'.$row['id'].'"/></td>
                                       <td><a href="#bModal" data-toggle="modal" id="'.$row['id'].'"  onClick="viewInventory(this.id)">'.$row["recipt_number"].'</a></td>
										<td>'.$row["expences_catogery"].'</a></td>
										<td><'.$row["description_of_expence"].'</td>
										<td>'.$row["expence_amount"].'</span></td>
										<td>'.$row["dates"].'</td>
										<td class="TAC">
                                            <a class="action1 tip" title="View Detail" id="'.$row['id'].'"  onClick="viewInventory(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
                                            <a class="action2" id="'.$row['id'].'"  href="'.site_url('admin/editInventory/'.$row['id']).'"><span class="icon-pencil"></span></a> 
                                            <a class="action3 " id="'.$row['id'].'" onClick="deletesInventory(this.id)" href="#"><span class="icon-trash"></span></a>
                                        </td>
									</tr>';
	}
	echo $output;
}

function deleteAllInventory()
{

	$application_id=$this->input->post("inventorys");
	
			if($application_id){
					for($i=0;$i<sizeof($application_id);$i++) {
						$this->admin_model->deletesInventorys($application_id[$i]);
					}
			}

		
		
	 redirect('admin/viewInventory');
		
}



public function InventoryReport()
	{
		
		$user=$this->session->userdata("userid");
		$role_type=$this->session->userdata("role_type");
		if($user!="" && $role_type=="Branch_Admin"){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$data["academic_year"]=$this->admin_model->academicYear();
			$this->load->view('header',$data);
			$this->load->view('inventoryReport',$data);
			$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}

	function getInventoryList()
	{
		$result=$this->admin_model->getInventoryList();
		$totalDue=0;
		$total=0;
		$grandDue=0;
		$grandTotal=0;
		$output="";
	foreach ($result as $row) {
			$total=$row['expence_amount']+$row['tax'];
			$totalDue+=$row['due_payment'];
			$grandTotal+=$total;
			$output.='<tr>
                        <td>'.$row["recipt_number"].'</td>
										<td>'.$row["expences_catogery"].'</td>
										<td>'.$row["description_of_expence"].'</td>
										<td>'.$row["dates"].'</td>
										<td>'.$row["expence_amount"].'</span></td>
										<td>'.$row["tax"].'</td>
										<td>'.$row["due_payment"].'</td>
										<td class="TAC">'.$total.'
                                            
                                        </td>
									</tr>';

		}

		$output.='
				    <tr><td></td>
				     <td></td>
				     <td></td>
				     <td></td>
				     <td></td>

				     <td></td>
				      <th>Total Due</th>
				      <th>Total Expense</th>
				    </tr>

				     <tr>
				     <td></td>
				     <td></td>
				     <td></td>
				     <td></td>
				     <td></td>
				     <td></td>
				      <td>'.$totalDue.'</td>
				      <td>'.$grandTotal.'</td>
				    </tr>';
				 
		echo $output;
		
		//echo $result;
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */