<?php

namespace Clement\PomoTask\Models;

use Clement\PomoTask\Core\Model;
use http\Header;

class AuthenticateModel extends Model
{
  public function createUser(array $data){
    $sql = "INSERT INTO users 
            (username, email, password) 
            VALUES (
                :username, :email, :password                                       
            )
            RETURNING user_id";
    $vars = [
      ":username" => $data['username'],
      ":email" => $data['email'],
      ":password" => $data['password']
    ];

    $user = $this->query($sql, $vars);

    if(isset($user)){
      Header('Location: /');
    }
  }

}