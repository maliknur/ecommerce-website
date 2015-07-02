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

	public function product_info($product_id)
	{
		$this->load->model("customized_models/catalog_product", "catalog");
		$product = $this->catalog->get_product_image_by_id($product_id);
		// var_dump($product);
		$this->load->view('product_info', $product);
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
		$user = $this->user->check_signin($post);
		redirect("dashboard");
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
		}
		else
		{
			$errors = array(validation_errors());
			$this->session->set_flashdata("errors", $errors);
			redirect("register");
		}
	}
}