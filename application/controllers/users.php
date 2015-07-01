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
<<<<<<< HEAD:application/controllers/main.php

=======
>>>>>>> parent of a4d07d4... admin dashboard setup:application/controllers/users.php
	   $this->load->view('index');
	}


<<<<<<< HEAD:application/controllers/main.php
	public function products()
	{	
	   $this->load->view('products');
	}


	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function orders()
	{
		$this->load->view('orders');
	}
=======
>>>>>>> parent of a4d07d4... admin dashboard setup:application/controllers/users.php



	public function cart()
	{
		$this->load->view("cart");
	}

}