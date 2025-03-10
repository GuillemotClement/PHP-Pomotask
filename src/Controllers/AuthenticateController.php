<?php

namespace Clement\PomoTask\Controllers;

use Clement\PomoTask\Core\Controller;

class AuthenticateController extends Controller
{
  public function login(){

    renderView('login');
  }

  public function register(){
    $data = [
      'page' => 'Inscription'
    ];


    renderView('register', $data);
  }

  public function logout():void
  {
    session_destroy();
    header("Location: /");
    exit();
  }
}


