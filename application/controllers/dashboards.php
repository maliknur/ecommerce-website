<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboards extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard');

	}


	public function orders()
	{
		$result = $this->Dashboard->load_all_orders();
		// var_dump($result);
		// die();
		if($result)
		{

			$this->load->view('orders', array('orders' => $result));
		}


	}




}