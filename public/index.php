<?php
require "./layout/head.php";
require "./layout/header.php";

require './Core/config.php';
require './Core/helpers.php';

session_start();
p($_SESSION);
?>
  <h1>Todo</h1>
<a href="/logout.php">Deconnexion</a>
</body>
</html>
