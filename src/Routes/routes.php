<?php

return [
  '/' => [
    'controller' => 'Home',
    'method'=> 'GET',
    'action' => 'index',
  ],
  '/logout' => [
    'controller' => 'Authenticate',
    'method' => 'GET',
    'action' => 'logout'
  ]
];




//$routes = [
//  '/' => [
//    [
//      'controller' => 'home',
//      'method' => 'GET'
//    ],
//  ],
//  '/login' => [
//    [
//      'controller' => 'login',
//      'method' => 'GET'
//    ],
//    [
//      'controller' => 'login',
//      'method'=>'POST'
//    ],
//  ],
//  '/logout' => [
//    [
//      'controller' => 'authenticate',
//      'method' => 'GET',
//      'action' => 'logout'
//    ]
//  ]
//];