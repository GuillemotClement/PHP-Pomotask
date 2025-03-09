<?php
$dsn = "pgsql:host=localhost;port=5432;dbname=pomotask";
$user = "postgres";
$pwd = "postgres";

try{
  $pdo = new PDO($dsn, $user, $pwd, [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
}catch(PDOException $e){
  echo 'Error connect to database' . $e->getMessage();
}






