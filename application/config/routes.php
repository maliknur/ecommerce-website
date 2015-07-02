<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";


$route['products'] = "main/products";
$route['orders'] = "/dashboards/orders";
$route['dashboard'] = "/dashboards/dashboard";
$route['inventory'] = "/dashboards/inventory";

// ===== Routes by Chris =====
$route['cart'] = "/main/cart";
$route['signin'] = "/main/signin";
$route['register'] = "/main/register";
// ===========================

//Austin - Catalog, product_info routes

$route['catalogs'] = "catalogs";

//Austin - Catalog, product_info routes

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
