<?php

namespace Clement\PomoTask\Core;

use PDO;
use PDOException;

class Database
{
  private static ?PDO $pdo = null;

  // need for singleton
  private function __construct(){}

  public static function getConnection():PDO
  {
    if (self::$pdo === null) {
      try {
        self::$pdo = new PDO("pgsql:host=localhost;port=5432;dbname=pomotask", "postgres", "postgres", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
      } catch (PDOException $e) {
        die('Error connect to database' . $e->getMessage());
      }
    }
    return self::$pdo;
  }
}