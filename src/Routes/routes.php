<?php
// Pour eviter l'erreur de ide
/** @var \Clement\PomoTask\Core\Router $router */

$router->getRoute('/', 'Home', 'index');
$router->getRoute('/register', 'Authenticate', 'register');
$router->postRoute('/register', 'Authenticate', 'register');



