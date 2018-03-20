<?php
session_start();
require_once 'vendor/autoload.php';

\Core\App::bind('config',require 'config.php');
$config=\Core\App::get('config');


require_once "Core/DB/eloquent.php";

//\Core\App::bind('database',
//    new \Core\DB\QueryBuilder(\Core\DB\Connection::make($config['database']))
//);