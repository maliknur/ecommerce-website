<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Model {


	// load all orders list to dashboard with SELECT option by status of orders
	public function load_all_orders($select )

	{	
		$query = "SELECT * FROM order_list WHERE status";

		switch ($select) {
			case 'in process':
				return $this->db->query($query . "= 'in process'")->result_array();
				break;
			case 'shipped':
				return $this->db->query($query . "= 'shipped'")->result_array();
				break;
			case 'cancelled':
				return $this->db->query($query . "= 'cancelled'")->result_array();
				break;
			case 'all':
				return $this->db->query($query . "<> 'all'")->result_array();
				break;
			default:
				return $this->db->query($query . "<> 'all'")->result_array();
				break;
		}

	}


	public function update_orders_status($status, $order_id)
	{
		$query = "UPDATE orders SET status ='".$status. "' WHERE id =".$order_id;
		return $this->db->query($query);
	}


	public function search_by_name($name)
	{
		if(!empty($name) || $name !== NULL)
		{	
		$query = "SELECT * FROM order_list WHERE first_name LIKE '".$name."%' OR last_name LIKE '".$name."%'";


		 $result = $this->db->query($query)->result_array();

		 if($result !== NULL)
		 {
		 	return $result;
		 }

		}
		else
		{	
			$select = "all";
			$this->load_all_orders($select);		
		}


	}



}
