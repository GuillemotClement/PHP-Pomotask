<?php

namespace Clement\PomoTask\Core;
use PDO;
class Model
{
  protected PDO $pdo;

  public function __construct()
  {
    $this->pdo = Database::getConnection();
  }

  protected function query(string $sql, array $vars=[]){
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($vars);

    // si insertion on retourne le dernier id inserer
    if(stripos($sql, 'INSERT') === 0){
      return $this->pdo->lastInsertId();
    }

    return $stmt->fetchObject();
  }

  public function fetchAll(string $table){
    $sql = "SELECT * FROM $table";

    return $this->query($sql);
  }

}