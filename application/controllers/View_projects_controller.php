<?php
class View_projects_Controller extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('view_projects_model');
		$this->load->library('session');
	}

	public function getMyProjects(){
		$user_id = $this->session->userdata('user_id');
		$this->view_projects_model->getMyProjects($user_id);
	}
}