<?php

use Clement\PomoTask\Core\Router;

require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../src/Core/helpers.php";

session_start();

$router = new Router();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$router->dispatchRoute($uri, $method);



