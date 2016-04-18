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
		//redirect("Branch_manager_controller/NewRegistration");
	}

	public function NewRegistration()
	{
		$user=$this->session->userdata("userid");
		if($user){
			$data["loginPersonInfo"]=$this->admin_model->getPersonDetails($user);
			$this->load->view('header',$data);
			$this->load->view('Registration');
			$this->load->view('js');
		}else{
			redirect('admin/index');
		}
	}
}