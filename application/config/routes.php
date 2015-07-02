<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";

$route['products'] = "main/products";
$route['dashboard'] = "main/dashboard";
$route['orders'] = "main/orders";


$route['cart'] = "main/cart";

//Austin - Catalog, product_info routes

$route['catalogs'] = "catalogs";

//Austin - Catalog, product_info routes

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
