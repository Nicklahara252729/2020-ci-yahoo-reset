<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//save yahoo
$route['save-password'] = 'welcome/savePassword';

//auth
$route['logout'] = 'auth/logout';
$route['admin'] = 'auth/index';
$route['proses-login'] = 'auth/proses';

//admin
$route['dashboard']     = 'administrator/index';
$route['delete-reset-password']     = 'administrator/hapus';

