<?php
require_once 'app/Controller/Migration/routes.php';
$router->get('','PagesController@home');
$router->get('About','PagesController@about');
$router->get('Contact','PagesController@contact');
$router->post('blogpost','PagesController@post');
$router->get('Admin/Setup','SetupController@index');


