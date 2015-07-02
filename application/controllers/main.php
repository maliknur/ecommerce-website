<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();	

		// Model loaded by Chris
		$this->load->model("user");
	}

	public function index()
	{	
		$this->load->view("catalog");
	}

	public function product_info()
	{
		$this->load->view('product_info');
	}

	public function cart()
	{
		$this->load->view("cart");
	}

	public function signin()
	{
		$this->load->view("signin");
	}

	public function check_signin()
	{
		$post = $this->input->post();
		$check_user = $this->user->check_signin($post);
		if ($check_user && $check_user["password"] == md5($post["password"]))
		{
			$user = array(
				"id" => $check_user["id"],
				"first_name" => $check_user["first_name"],
				"last_name" => $check_user["last_name"],
				"email" => $check_user["email"],
				"admin_power" => $check_user["admin_power"],
				"logged_in" => TRUE
				);
			// =============================================
			// ======= LOGGED IN USER SESSION CREATED ======
			// =============================================
			$this->session->set_userdata($user);
			if ($user["admin_power"] == 1)
			{
				redirect("orders");
			}
			else
			{
				redirect("/");
			}
			// =============================================
			// =================== END =====================
			// =============================================
		}
		else
		{
			$this->session->set_flashdata("login_error", "Invalid email or password!");
			redirect("signin");
		}
	}

	public function register()
	{
		$this->load->view("register");
	}

	public function register_new_user()
	{
		$post = $this->input->post();
		$validate_result = $this->user->validate_registration($post);
		if ($validate_result == "valid")
		{
			$this->user->register_new_user($post);
			$this->session->set_flashdata("registered", "Welcome to E-Commerce! You are now registered!");
			redirect("signin");
		}
		else
		{
			$errors = array(validation_errors());
			$this->session->set_flashdata("errors", $errors);
			redirect("register");
		}
	}
}