<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	// $this->output->enable_profiler();
	
	// }

    // main page

	public function index()
	{	
	   $this->load->view('catalog');
	}

	public function product_info()
	{
		$this->load->view('product_info');
	}


}