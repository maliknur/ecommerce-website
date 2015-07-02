<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();	
	}

	public function index()
	{	
		$this->load->view("catalog");
	}

	public function products()
	{	
	   $this->load->view('products');
	}

	public function product_info()
	{
		$this->load->view('product_info');
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function orders()
	{
		$this->load->view('orders');
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
		$this->load->model("user");
		$user = $this->user->check_signin($post);
		var_dump($user);
	}
}