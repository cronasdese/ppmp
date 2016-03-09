<?php
class Navbar_controller extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('navbar_model');
		$this->load->model('login_model');
		$this->load->library('session');
	}

	public function goHome(){
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->navbar_model->getUserDetails($user_id);
		$this->load->view('navbar', $data);
		$this->load->view('home');
	}

	public function logout(){
		$this->session->sess_destroy();
		$data['all_office'] = $this->login_model->getAllOffice();
		$this->load->view('login', $data);
	}
}