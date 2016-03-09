<?php

class Navbar_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function getUserDetails($user_id){
		$this->db->select('id, office_id, name, position');
		$this->db->from('user');
		$this->db->where('id', $user_id);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
}