<?php

use http\Header;

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
  if(!isset($routes[$uri])){
    abort();
  }

  foreach ($routes[$uri] as $route){
    if($route['method'] === $method){
      return requireController($route['controller']);
      exit();
    }
  }

  abort();
}

function logout(){
  session_destroy();
  header("Location: /");
  exit();
}

function renderPartial(string $partial){
  $file = __DIR__ ."/../Views/layout/partials/{$partial}.php";
  if(file_exists($file)){
    require_once $file;
  }
  else {
    return "Partial $partial not found";
  }
}
