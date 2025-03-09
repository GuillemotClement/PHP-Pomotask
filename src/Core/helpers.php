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

function abort(int $code = 404){
  http_response_code($code);
  renderView('404');
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
