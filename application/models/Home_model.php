<?php

class Home_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function getOfficeDetails($user_id){
		$this->db->select('office.office');
		$this->db->from('user');
		$this->db->join('office', 'user.office_id = office.id');
		$this->db->where('user.id', $user_id);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
}