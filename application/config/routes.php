<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'frontController';
$route['single-view'] = 'pages/single_view';
$route['admin'] = 'pages/admin';
$route['all-wanted'] = 'pages/all_wanted_list';
$route['add-new-wanted'] = 'pages/add_new_wanted';
$route['all-reported'] = 'pages/all_reported';
$route['account_user'] = 'pages/account_user';
$route['all-crime-report'] = 'pages/crime_report';
$route['comment'] = 'pages/comment';
$route['page-settings'] = 'pages/page_settings';
$route['city-settings'] = 'pages/city_settings';
$route['top_most_wanted'] = 'frontController/topMostWanted';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
