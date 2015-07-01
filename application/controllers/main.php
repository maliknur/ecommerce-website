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
	   $this->load->view('orders');
	}


	public function products()
	{	
	   $this->load->view('products');
	}


	public function dashboard()
	{
		$this->load->view('dashboard');
	}




=======
	   $this->load->view("index");
	}

	public function cart()
	{
		$this->load->view("cart");
	}
>>>>>>> 7d7e616507917d5731dec02c2f57b919f060df9e:application/controllers/main.php
}