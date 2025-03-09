<?php

namespace Clement\PomoTask\Controllers;

use Clement\PomoTask\Core\Controller;

class AuthenticateController extends Controller
{
  public function login(){}

  public function register(){}

  public function logout():void
  {
    session_destroy();
    header("Location: /");
    exit();
  }
}


