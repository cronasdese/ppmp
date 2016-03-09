<?php
class Create_controller extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('create_model');
		$this->load->helper('date');
		$this->load->model('view_model');
		$this->load->model('navbar_model');
		$this->load->library('session');
	}

	public function getCategory(){
		$categories = $this->create_model->getCategory();
		echo json_encode($categories);
	}

	public function getSubcategory(){
		$category_id = $this->input->post('category_id');
		$subcategories = $this->create_model->getSubcategory($category_id);
		echo json_encode($subcategories);
	}

	public function getSubcategoryOfItem(){
		$item = $this->input->post('item');
		$subcategory = $this->create_model->getSubcategoryOfItem($item);
		echo json_encode($subcategory);
	}

	public function getItem(){
		$subcategory_id = $this->input->post('subcategory_id');
		$items = $this->create_model->getItem($subcategory_id);
		echo json_encode($items);
	}

	public function getItemDetails(){
		$item_id = $this->input->post('item_id');
		$item_details = $this->create_model->getItemDetails($item_id);
		echo json_encode($item_details);
	}

	public function submitPPMP(){
		$date_format = 'DATE_W3C';
		$date_submitted = standard_date($date_format);
		$user_id = $this->session->userdata('user_id');
		$title = $this->input->post('create_project_title');
		$ppmp_id = $this->create_model->submitPPMP($user_id, $title, $date_submitted);

		foreach ($_POST['items'] as $project_data) {
			$this->create_model->insertProjectDetails($project_data, $ppmp_id);
		}

		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->navbar_model->getUserDetails($user_id);
		$data['project'] = $this->view_model->getProject($ppmp_id);
		$data['project_details'] = $this->view_model->getProjectDetails($ppmp_id);

		$this->load->view('navbar', $data);
		$this->load->view('view_ppmp', $data);
	}
}