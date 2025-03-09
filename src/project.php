<?php
require "./layout/head.php";
require "./layout/header.php";

require './Core/config.php';
require './Core/helpers.php';

session_start();
p($_SESSION);

$sql = "SELECT "


?>

<main class="">
  <h1>Liste des projets</h1>
  <a href="/createProject.php" class="btn btn-primary">Nouveau</a>
</main>
