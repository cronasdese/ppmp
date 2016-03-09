<?php

class Create_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function getCategory(){
		$this->db->select('id, category');
		$this->db->from('category');
		$this->db->where('status', 1);
		$this->db->order_by('category', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	function getSubcategory($category_id){
		$this->db->select('id, subcategory');
		$this->db->from('subcategory');
		$this->db->where('status', 1);
		$this->db->where('category_id', $category_id);
		$this->db->order_by('subcategory', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	function getSubcategoryOfItem($item){
		$this->db->select('subcategory.id, subcategory.subcategory');
		$this->db->from('item');
		$this->db->join('subcategory', 'item.subcategory_id = subcategory.id');
		$this->db->where('item.description', $item);
		$query = $this->db->get();
		return $query->result();
	}

	function getItem($subcategory_id){
		$this->db->select('id, description, unit, price');
		$this->db->from('item');
		$this->db->where('status', 1);
		$this->db->where('subcategory_id', $subcategory_id);
		$this->db->order_by('description', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	function getItemDetails($item_id){
		$this->db->select('unit, price');
		$this->db->from('item');
		$this->db->where('id', $item_id);
		$query = $this->db->get();
		return $query->result();
	}

	function submitPPMP($user_id, $title, $date_submitted){
		$data = array(
			'user_id' => $user_id,
			'title' => $title,
			'date_submitted' => $date_submitted,
			'approval_status' => $user_id
		);
		$this->db->insert('project', $data);
		$id = $this->db->insert_id();

		return $id;
	}

	function insertProjectDetails($project_data, $ppmp_id){
		$project_details = array(
			'project_id' => $ppmp_id, 
			'category_id' => $project_data['category'],
			'description' => $project_data['item'],
			'quantity' => $project_data['quantity'],
			'unit' => $project_data['unit'],
			'price' => $project_data['price'],
			'jan' => $project_data['jan'],
			'feb' => $project_data['feb'],
			'mar' => $project_data['mar'],
			'apr' => $project_data['apr'],
			'may' => $project_data['may'],
			'jun' => $project_data['jun'],
			'jul' => $project_data['jul'],
			'aug' => $project_data['aug'],
			'sep' => $project_data['sep'],
			'oct' => $project_data['oct'],
			'nov' => $project_data['nov'],
			'dec' => $project_data['dec']
		);
		$this->db->insert('project_details', $project_details);
	}
}