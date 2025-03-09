<?php
require "./layout/head.php";
require "./layout/header.php";

require './Core/config.php';
require './Core/helpers.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
  $vars = [':username' => $username, ':email'=>$email, ':password'=>$password];
  $stmt = $pdo->prepare($sql);
  $stmt->execute($vars);
}
?>

    <form action="" method="POST" class="col-6">
      <h1>Inscription</h1>
      <div class="mb-3 col-6">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email" required>
      </div>
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