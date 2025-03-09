<?php

namespace Clement\PomoTask\Controllers;

use Clement\PomoTask\Core\Controller;

class HomeController extends Controller
{
  private array $data = [
    'page' => 'Homepage'
  ];

  public function index():void
  {
    renderView('home', $this->data);
  }
}


