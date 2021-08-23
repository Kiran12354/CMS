<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'My_controller';
$route['404_override'] = 'My_controller/page_not_found';
$route['translate_uri_dashes'] = FALSE;
$route['Dashboard']="My_controller";
$route['Branches']="My_controller/branch";
$route['add_branch']="My_controller/branchadd";
$route['update_b']="My_controller/update_branch";
$route['User']="My_controller/users";
$route['add_user']="My_controller/useradd";
$route['update_user']="My_controller/user_update";
$route['add_years']="My_controller/years";
$route['show_year']="My_controller/years_show";
$route['update_y']="My_controller/update_year";
$route['log']="My_controller/login";
$route['check']="My_controller/check_login";
$route['logout']="My_controller/logout";
$route['user_dashboard']="user_controller/user_index";
$route['logout_user']="user_controller/logout";
$route['student']="My_controller/students";
$route['add_student']="My_controller/add_students";
$route['user_students']="user_controller/students";
$route['update_student']="My_controller/up_stud";
$route['particulars']="My_controller/fee_particular";
$route['fee_particulars']="user_controller/fee_particular";
$route['particular']="My_controller/add_particular";
$route['up_particular']="My_controller/update_particular";
$route['add_fee']="My_controller/fee_add";
$route['up_fee']="My_controller/fee_update";
$route['fees/(:any)']="My_controller/fees/$1";
$route['s_fees/(:any)']="user_controller/s_fees/$1";








