<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboards extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard');

	}

	public function inventory()
	{	
	   $this->load->view('products');
	}


	public function dashboard()
	{

		$this->load->view('dashboard');
	}


	public function orders()
	{
		$result = $this->Dashboard->load_all_orders();

		if($result)
		{

			$this->load->view('orders', array('orders' => $result));
		}


	}




}