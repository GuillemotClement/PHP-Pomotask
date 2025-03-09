<?php
function p(mixed $value): void
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

function basePath(string $path){
  return __DIR__."/../{$path}.php";
}

function renderView(string $view, array $variables = []){
  extract($variables);
  require basePath("Views/Pages/{$view}View");
}

function requireController(string $controller){
  require basePath("Controllers/{$controller}Controller");
}

function abort(int $code = 404){
  http_response_code($code);
  renderView('404');
  exit();
}

/**
 * Fonction de routing vers le bon controller
 * @param string $uri uri demander
 * @param string $method methode utiliser
 * @param array $routes tableau des routes de l'application
 * @return void
 */
function dispatchRoute(string $uri, string $method, array $routes){
  foreach ($routes as $path => $route){
    if($path === $uri && $route['method'] === $method){
      requireController($route['controller']);
      exit();
    }
  }
  abort();
}
