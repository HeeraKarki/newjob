<?php
$router->get('Admin/Migration/All','Migration\\All@call');

$router->get('Admin/Seed/All','Seed\\All@call');


$router->get('Admin/Migration/User','Migration\\TableCreate@userTable');
$router->get('Admin/Migration/Todo','Migration\\TableCreate@todoTable');