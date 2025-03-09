<?php

namespace Clement\PomoTask\Core;

use Exception;

class Router
{
  private array $routes;

  public function __construct()
  {
    $this->routes = require_once __DIR__.'/../Routes/routes.php';
  }

  private function requireController(string $controllerName, string $methodName = 'index'){
    $controllerClass = "Clement\\PomoTask\\Controllers\\".ucfirst($controllerName)."Controller";

    if(!class_exists($controllerClass)){
      throw new Exception("Controller {$controllerClass} not found");
    }

    $controllerInstance = new $controllerClass();

    if(!method_exists($controllerInstance, $methodName)){
      throw new Exception("Method $methodName not found in controller $controllerClass");
    }

    return $controllerInstance->$methodName();
  }

  public function dispatchRoute(string $uri, string $method){
    if(!isset($this->routes[$uri])){
      abort();
    }

    $route = $this->routes[$uri];

    if($route['method'] !== $method)
    {
      throw new Exception("Method not allowed for route '$uri'. Expected: {$route['method']}, got: $method");
    }

    return $this->requireController($route['controller'], $route['action'] ?? 'index');

    abort();
  }

}