<?php
class Catalog_product extends CI_Model {
     function get_product_image()
     {
        return $this->db->query("SELECT * FROM products JOIN images ON products.id = images.products_id")->result_array();
     }

}
?>