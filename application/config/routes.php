<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'pages';
$route['single-view'] = 'pages/single_view';
$route['admin'] = 'pages/admin';
$route['all-wanted'] = 'pages/all_wanted_list';
$route['add-new-wanted'] = 'pages/add_new_wanted';
$route['all-reported'] = 'pages/all_reported';
$route['settings'] = 'pages/setting';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
