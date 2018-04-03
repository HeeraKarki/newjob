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

$router->get('Admin/SeedFilesMake','Admin\\AdminController@createSeedFile');

//Location CRUD
$router->get('Admin/Location','Admin\\LocationController@index');

$router->get('Admin/Location_edit','Admin\\LocationController@edit');

$router->get('Admin/Location_delete','Admin\\LocationController@delete');

$router->post('Admin/Location_Add','Admin\\LocationController@create');

$router->post('Admin/Location_update','Admin\\LocationController@update');


//Contract Type CRUD
$router->get('Admin/Contract_type','Admin\\ContractTypeController@index');

$router->get('Admin/Contract_type_edit','Admin\\ContractTypeController@edit');

$router->get('Admin/Contract_type_delete','Admin\\ContractTypeController@delete');

$router->post('Admin/Contract_type_Add','Admin\\ContractTypeController@create');

$router->post('Admin/Contract_type_update','Admin\\ContractTypeController@update');


//Job Function CRUD

$router->get('Admin/JobFunction','Admin\\JobFunctionController@index');

$router->get('Admin/Jobfunction_edit','Admin\\JobFunctionController@edit');

$router->get('Admin/Jobfunction_delete','Admin\\JobFunctionController@delete');

$router->post('Admin/JobFunction_Add','Admin\\JobFunctionController@create');

$router->post('Admin/JobFunction_update','Admin\\JobFunctionController@update');

//Job Industry CRUD

$router->get('Admin/JobIndustry','Admin\\JobIndustryController@index');

$router->get('Admin/JobIndustry_edit','Admin\\JobIndustryController@edit');

$router->get('Admin/JobIndustry_delete','Admin\\JobIndustryController@delete');

$router->post('Admin/JobIndustry_Add','Admin\\JobIndustryController@create');

$router->post('Admin/JobIndustry_update','Admin\\JobIndustryController@update');

