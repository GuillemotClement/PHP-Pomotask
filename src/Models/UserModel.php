<?php

namespace Clement\PomoTask\Models;

use Clement\PomoTask\Core\Model;

class UserModel extends Model
{
  private string $table = "Users";
  public function detailUser($id){
    $sql = "SELECT * FROM {$this->table} WHERE id = :id";
    $vars = [':id' => $id];
    return $this->query($sql, $vars);
  }

  public function getUserByUsername($username){
    $sql = "SELECT * FROM Users WHERE username = :username";
    $vars = [':username' => $username];
    $row = $this->query($sql, $vars);
    return $row->fetchObject();
}
}