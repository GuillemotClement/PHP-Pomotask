<?php
require "./layout/head.php";
require "./layout/header.php";

require './Core/config.php';
require './Core/helpers.php';

session_start();
p($_SESSION);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE username = :username";
  $vars = [':username' => $username];
  $stmt = $pdo->prepare($sql);
  $stmt->execute($vars);
  $row = $stmt->fetchObject();

  if($row->user_id > 0){

    if($row->password === $password){
      $_SESSION['user'] = $username;
      $_SESSION['userId'] = $row->user_id;
      header('Location: http://localhost:8000/');
    }
  }

  header("Refresh:0");
}
?>



<form action="" method="POST" class="col-6">
  <h1>Connexion</h1>
  <div class="mb-3 col-6">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="mb-3 col-6">
    <label for="password" class="form-label">password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="mb-3 col-6">
    <button type="submit" class="btn btn-primary">Inscription</button>
  </div>
</form>
</body>
</html>
