<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'welcome/dashboard';
$route['manage-student'] = 'students/index';
$route['add-student'] = 'students/create';
$route['save-student'] = 'students/save';
$route['edit-student/(.+)'] = 'students/edit/$1';
$route['update-student/(.+)'] = 'students/update/$1';
