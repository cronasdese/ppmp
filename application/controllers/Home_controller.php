<?php
class Home_controller extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('home_model');
		$this->load->model('navbar_model');
		$this->load->library('session');
	}

	public function createPPMP(){
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->navbar_model->getUserDetails($user_id);
		$data['office'] = $this->home_model->getOfficeDetails($user_id);
		$this->load->view('navbar', $data);
		$this->load->view('create_ppmp', $data);
	}
}