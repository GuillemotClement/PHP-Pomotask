<?php

use Clement\PomoTask\Core\Database;
use Clement\PomoTask\Models\UserModel;

$data = [
  'page' => 'Connexion',
];


if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  $userModel = new UserModel();

  $checkUser = $userModel->getUserByUsername($username);

  if(isset($checkUser->user_id) && $checkUser->password === $password){

    $_SESSION['user_id'] = $checkUser->user_id;
    $_SESSION['username'] = $checkUser->username;

    header("Location: http://localhost:8000/");
    exit();
  }else{
    echo 'Error authenticate';
  }
}


renderView('login', $data);