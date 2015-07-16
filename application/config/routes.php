<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "home";
$route['404_override'] = 'welcome';
$route['kantin'] = "admin";
$route['kantin/(:any)'] = "admin/$1";