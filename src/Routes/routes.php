<?php
// Pour eviter l'erreur de ide
/** @var \Clement\PomoTask\Core\Router $router */

$router->getRoute('/', 'Home', 'index');
$router->getRoute('/register', 'Authenticate', 'register');
$router->postRoute('/register', 'Authenticate', 'register');

$router->getRoute('/login', 'Authenticate', 'login');
$router->postRoute('/login', 'Authenticate', 'login');

$router->getRoute('/projects', 'Project', 'listProject');
$router->getRoute('/projects/create', 'Project', 'createProject');
$router->postRoute('/projects/create', 'Project', 'createProject');
