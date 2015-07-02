<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public function check_signin($post)
	{
		$query = "SELECT * FROM customers WHERE email = ?", array($post["email"]);
		return $this->db->query($query)->row_array();
	}

}