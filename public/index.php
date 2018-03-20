<?php
require_once 'Core/boostrap.php';

\Core\Router::load('routes.php')->direct(
    \Core\Request::uri($config['server']),
    \Core\Request::method());