<?php
require_once 'app/Controller/Migration/routes.php';

$router->get('','User\\HomeController@home');

$router->get('Login','User\\HomeController@Login');

$router->post('Login_Check','User\\LoginController@Check');

$router->get('Register','User\\HomeController@Register');

$router->post('Signup','User\\RegisterController@Signup');



$router->get('Admin/Setup','SetupController@index');


