<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Custom Route
$route['backend'] = 'admin/auth';
$route['dashboard'] = 'admin/home';
