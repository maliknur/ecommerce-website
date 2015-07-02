<?php
class product extends CI_Model {
     function get_all_products()
     {
         return $this->db->query("SELECT * FROM products")->result_array();
     }
     function get_product_by_id($product_id)
     {
         return $this->db->query("SELECT * FROM products WHERE id = ?", array($product_id))->row_array();
     }
     function get_most_recent_product()
     {
         return $this->db->query("SELECT * FROM products ORDER BY id DESC LIMIT 1")->row_array();
     }

}
?>