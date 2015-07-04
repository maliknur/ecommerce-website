<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";

$route['orders'] = "/dashboards/orders";
$route['dashboard'] = "/dashboards/dashboard";
$route['inventory'] = "/dashboards/inventory";

// ===== Routes by Chris =====
$route['cart'] = "/main/cart";
$route['register'] = "/main/register";
$route['signin'] = "/main/signin";
$route['logout'] = "/main/logout";
$route['product_info/(:any)'] = "/catalogs/product_info/$1";
$route['add_to_cart'] = "/catalogs/add_to_cart";
// ===========================

//Austin - Catalog, product_info routes

$route['catalogs'] = "catalogs";

//Austin - Catalog, product_info routes

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
