<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";


$route['products'] = "main/products";
$route['dashboard'] = "main/dashboard";
$route['orders'] = "main/orders";

// ===== Routes by Chris =====
$route['cart'] = "/main/cart";
$route['signin'] = "/main/signin";
$route['register'] = "/main/register";
// ===========================

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
