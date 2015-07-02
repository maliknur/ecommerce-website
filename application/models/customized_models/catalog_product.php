<?php
class Catalog_product extends CI_Model {
	function get_product_image()
	{
		return $this->db->query("SELECT * FROM products JOIN images ON products.id = images.products_id")->result_array();
	}
	function get_product_image_by_id($product_id)
	{
		return $this->db->query("SELECT * FROM products JOIN images ON products.id = images.products_id WHERE products.id = ?", array("product_id" => $product_id))->row_array();
	}
	function get_product_image_with_limit($limit)
	{
		return $this->db->query("SELECT * FROM products JOIN images ON products.id = images.products_id ". $limit)->result_array();
	}

}
?>