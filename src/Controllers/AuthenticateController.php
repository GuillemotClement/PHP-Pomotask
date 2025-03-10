<?php

namespace Clement\PomoTask\Controllers;

use Clement\PomoTask\Core\Controller;
use Clement\PomoTask\Models\AuthenticateModel;
use Clement\PomoTask\Models\UserModel;
use http\Header;

class AuthenticateController extends Controller
{

  protected AuthenticateModel $authenticateModel;

  public function __construct()
  {
    $this->authenticateModel = new AuthenticateModel();
  }

  public function login(){
    renderView('login');
  }

  public function register(){
    $data = [
      'page' => 'Inscription'
    ];



    if($_SERVER['REQUEST_METHOD'] === 'POST'){

      $username = $_REQUEST['username'];
      $email = $_REQUEST['email'];
      $password = $_REQUEST['password'];
      $confirmPassword = $_REQUEST['confirm-password'];

      $data['user_input'] = [
        'username' => $username,
        'email' => $email
      ];

//      if(isset($username, $email, $password, $confirmPassword)){
//        $data['error'] = [
//          'message' =>'Valeurs manquantes'
//        ];
//      }
//
//      if($password !== $confirmPassword){
//        $data['error'] = [
//          'message' =>'La confirmation ne correspond pas au mot de passe'
//        ];
//      }
//
//      if(strlen($username) < 3){
//        $data['error'] = [
//          'message' =>'Votre pseudo est trop court'
//        ];
//      }
//
//      if(strlen($email) < 10){
//        $data['error'] = [
//          'message' =>"L'email est trop court"
//        ];
//      }
//
//      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//        $data['error'] = [
//          'message' =>"L'email n'est pas valide"
//        ];
//      }
//
//      if(!empty($data['error'])){
//        $data['error'] = [
//          'message' =>"Erreur lors de l'inscription"
//        ];
//        Header("Location : /register");
//      }

      $hashPassword = password_hash($password, PASSWORD_DEFAULT);

      $newUser = [
        'username' => $username,
        'email' => $email,
        'password' => $hashPassword
      ];

      $this->authenticateModel->createUser($newUser);

    }


    renderView('register', $data);
  }

  public function logout():void
  {
    session_destroy();
    header("Location: /");
    exit();
  }
}


