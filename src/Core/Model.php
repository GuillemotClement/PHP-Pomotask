<?php

namespace Clement\PomoTask\Core;
use PDO;
class Model
{
  private PDO $pdo;

  public function __construct()
  {
    $this->pdo = Database::getConnection();
  }

  protected function query(string $sql, array $vars){
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($vars);
    return $stmt;
  }

}