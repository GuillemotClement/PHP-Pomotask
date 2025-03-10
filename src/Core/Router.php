<?php

namespace Clement\PomoTask\Core;

use Exception;

class Router
{
  private array $routes;

  public function __construct()
  {
    $this->routes = [];
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
    $routes = $this->routes[$uri];


    foreach ($routes as $route){
      if($route['method'] !== $method)
      {
        throw new Exception("Method not allowed for route '$uri'. Expected: {$route['method']}, got: $method");
      }

      return $this->requireController($route['controller'], $route['action'] ?? 'index');
    }
    abort();
  }

  public function addRoute(string $path, string $controller, string $method, string $action)
  {
    $this->routes[$path][] = [
      'controller' => $controller,
      'method' => $method,
      'action' => $action
    ];
  }

  public function getRoute(string $path, string $controller, string $action)
  {
    $this->addRoute($path, $controller, 'GET', $action);
  }

  public function postRoute(string $path, string $controller, string $action)
  {
    $this->addRoute($path, $controller, 'POST', $action);
  }

  public function deleteRoute(string $path, string $controller, string $action)
  {
    $this->addRoute($path, $controller, 'DELETE', $action);
  }

  public function patchRoute(string $path, string $controller, string $action)
  {
    $this->addRoute($path, $controller, 'PATCH', $action);
  }

  public function putRoute(string $path, string $controller, string $action)
  {
    $this->addRoute($path, $controller, 'PUT', $action);
  }
}