<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();	
	}

	public function index()
	{
		$this->load->view("partials/catalog_products");
		// die('index');
	}

	public function catalog_page()
	{
		$this->load->model("customized_models/catalog_product", "catalog");
		$products['all'] = $this->catalog->get_product_image();

		$this->load->view("partials/catalog_products", $products);
	}

}