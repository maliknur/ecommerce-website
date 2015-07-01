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

	   $this->load->view('index');
	}


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



	public function cart()
	{
		$this->load->view("cart");
	}

}