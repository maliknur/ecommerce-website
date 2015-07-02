<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public function check_signin($post)
	{
		$query = "SELECT * FROM customers WHERE email = ?";
		return $this->db->query($query, array($post["email"]))->row_array();
	}

	public function validate_registration($post)
	{
		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email|is_unique[customers.email]");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[7]|matches[password_confirm]");
		$this->form_validation->set_rules("password_confirm", "Password Confirmation", "trim|required|min_length[7]|matches[password]");
		if ($this->form_validation->run())
		{
			return "valid";
		}
		else
		{
			return array(validation_errors());
		}
	}

	public function register_new_user($post)
	{
		$query = "INSERT INTO customers (first_name, last_name, email, password, shipping_address_id, billing_address_id) VALUES (?,?,?,?,?,?)";
		$values = array($post["first_name"], $post["last_name"], $post["email"], md5($post["password"]), 1, 1);
		$this->db->query($query, $values);
	}

}