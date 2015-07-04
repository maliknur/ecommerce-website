<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogs extends CI_Controller {

	public $limit;

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();	
		$this->limit = 15;
		$this->load->model("customized_models/catalog_product", "catalog");
	}

	public function index()
	{
		die('index');
	}

	public function catalog_page()
	{
		$this->load->model("customized_models/catalog_product", "catalog");
		$limit = "LIMIT ". $this->limit;
		$products['limit'] = $this->limit;

		$products['products'] = $this->catalog->get_product_image_with_limit($limit);
		$products['all'] = $this->catalog->get_product_image();

		$this->load->view("partials/catalog_products", $products);
	}

	public function product_info($product_id)
	{
		$product = $this->catalog->get_product_image_by_id($product_id);
		$this->load->view('product_info', $product);
	}

	public function add_to_cart()
	{
		$post = $this->input->post();
		$this->catalog->add_to_cart($post);
		// var_dump($post);
		// die();
	}

}