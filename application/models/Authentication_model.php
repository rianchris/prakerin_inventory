<?php

if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Authentication_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function validate_login($postData) {
		$this->db->select('*');
		$this->db->where('email', $postData['email']);
		$this->db->where('password', md5($postData['password']));
		$this->db->where('status', 1);
		$this->db->from('user');
		$query=$this->db->get();
		if ($query->num_rows() == 0)
			return false;
		else
			return $query->result();
	}

}
