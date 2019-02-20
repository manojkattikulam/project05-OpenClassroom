<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['Home'] = 'Home/index';
$route['Client_ForgotPassword/verifytoken/(:any)'] = 'Client_ForgotPassword/verifytoken/$1';
$route['Client_Achat/payment/(:any)'] = 'Client_ForgotPassword/payement/$1';
$route['404_override'] = 'page404';
$route['translate_uri_dashes'] = FALSE;




