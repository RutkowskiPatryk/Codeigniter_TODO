<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['add_task'] = 'tasks/insert_task';
$route['add'] = 'pages/add';
$route['list'] = 'tasks/load_tasks';
$route['default_controller'] = 'pages/home';
$route[''] = 'tasks/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
