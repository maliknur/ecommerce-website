<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";

$route['products'] = "main/products";
$route['dashboard'] = "dashboards/orders";
$route['orders'] = "main/orders";


$route['cart'] = "main/cart";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
