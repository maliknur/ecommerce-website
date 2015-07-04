<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboards extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard');
		$this->load->helper('form');

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
		
		$this->load->view('orders');
		
	

	}


	public function orders_sort()
	{
		$select =$this->input->post('orders_sort');
		
		if(empty($select))
		{
			$select = 'all';	
		}

		$data['orders'] = $this->Dashboard->load_all_orders($select);

	
		if($data)
		{
			
			$this->load->view('partials/orders_list', $data);
		}
	}


	public function orders_status_update()
	{
		$status = $this->input->post('order_status');
		$order_id = $this->input->post('order_id');		
		

		$this->Dashboard->update_orders_status($status, $order_id);

	
	}


	public function search_by_name()
	{
		$name =$this->input->post('search_by_name');
		$data['orders'] = $this->Dashboard->search_by_name($name);


		if($data)
		{
			
			$this->load->view('partials/orders_list', $data);
		}
	}
		


















}