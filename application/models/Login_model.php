<?php

class Login_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function getAllOffice(){
		$this->db->select('id, office');
		$this->db->from('office');
		$this->db->where('status', 1);
		$this->db->order_by('office', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	function getUsersForOffice($office_id){
		$this->db->select('id, name');
		$this->db->from('user');
		$this->db->where('status', 1);
		$this->db->where('office_id', $office_id);
		$this->db->order_by('name', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	function validateUser($user_id, $password){
		$this->db->select('id, office_id, name, position');
		$this->db->from('user');
		$this->db->where('id', $user_id);
		$this->db->where('password', $password);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
}