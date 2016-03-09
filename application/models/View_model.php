<?php

class View_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function getProject($ppmp_id){
		$this->db->select('project.title project_title, project.approval_status, office.office office_name');
		$this->db->from('project');
		$this->db->join('user', 'project.user_id = user.id');
		$this->db->join('office', 'user.office_id = office.id');
		$this->db->where('project.id', $ppmp_id);
		$query = $this->db->get();
		return $query->result();
	}

	function getProjectDetails($ppmp_id){
		$this->db->select('category.category, project_details.description, project_details.quantity, project_details.unit, project_details.price, project_details.jan, project_details.feb, project_details.mar, project_details.apr, project_details.may, project_details.jun, project_details.jul, project_details.aug, project_details.sep, project_details.oct, project_details.nov, project_details.dec');
		$this->db->from('project_details');
		$this->db->join('category', 'project_details.category_id = category.id');
		$this->db->where('project_id', $ppmp_id);
		$this->db->order_by('category_id', 'asc');
		$query = $this->db->get();
		return $query->result();
	}
}