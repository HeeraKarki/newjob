<?php
require_once 'app/Controller/Migration/routes.php';

$router->get('','User\\HomeController@home');

$router->get('Login','User\\HomeController@Login');

$router->post('Login_Check','User\\LoginController@Check');

$router->get('Register','User\\HomeController@Register');

$router->post('Signup','User\\RegisterController@Signup');

$router->get('Activation','User\\RegisterController@activation');

$router->get('Admin/Setup','SetupController@index');

$router->get('Admin/Dashboard','Admin\\AdminController@index');

$router->get('Admin/Location','Admin\\LocationController@index');

$router->get('Admin/Location_edit','Admin\\LocationController@edit');

$router->get('Admin/Location_delete','Admin\\LocationController@delete');

$router->post('Admin/Location_Add','Admin\\LocationController@create');

$router->post('Admin/Location_update','Admin\\LocationController@update');


