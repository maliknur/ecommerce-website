<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Model {



	public function load_all_orders()

	{
			
		return $this->db->query("SELECT o.id, o.customers_id, o.total, o.status, o.created_at, o.updated_at, o.shippings_id, c.first_name, c.last_name, c.billing_address_id, a.address, a.city, a.zipcode, a.state FROM orders o join customers c on o.customers_id = c.id join addresses a on a.id =  c.billing_address_id")->result_array();



	}






}
