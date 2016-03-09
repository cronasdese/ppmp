<?php
class Login_controller extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('login_model');
		$this->load->library('session');
	}

	public function index(){
		$data['all_office'] = $this->login_model->getAllOffice();
		$this->load->view('login', $data);
	}

	public function getUsersForOffice(){
		$office_id = $this->input->post('office_id');
		$users = $this->login_model->getUsersForOffice($office_id);
		echo json_encode($users);
	}

	public function validateUser(){
		$user_id = $this->input->post('user');
		$password = $this->input->post('password');
		$validateUser = $this->login_model->validateUser($user_id, $password);
		$data['user_details'] = $validateUser;
		if($validateUser == null){
			$data['all_office'] = $this->login_model->getAllOffice();
			$this->load->view('login', $data);
		}
		else{
			$this->session->set_userdata('user_id', $validateUser[0]->id);
			$this->load->view('navbar', $data);
			$this->load->view('home');
		}
	}
}