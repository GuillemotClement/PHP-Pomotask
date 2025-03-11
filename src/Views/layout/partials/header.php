<?php
$user_id = $_SESSION['user_id'] ?? 0;
?>
<header class="navbar shadow-sm px-4">
  <a class="navbar-brand" href="/">
    <i class="fa-solid fa-list-check header-logo__logo"></i>
    <span class="header-logo__title">PomoTask</span>
  </a>
  <ul class="nav">
    <li class="nav-item"><a href="/" class="nav-link active">Accueil</a></li>
    <li class="nav-item"><a href="/projects" class="nav-link active">Projets</a></li>
    <li class="nav-item"><a href="/" class="nav-link active">Taches</a></li>
  </ul>
  <ul class="nav">
    <?php if($user_id > 0): ?>
      <li class="nav-item"><a href="/" class="nav-link active">Profil</a></li>
      <li class="nav-item"><a href="/logout" class="nav-link active">Deconnexion</a></li>
    <?php else: ?>
      <li class="nav-item"><a href="/login" class="nav-link active">Connexion</a></li>
      <li class="nav-item"><a href="/register" class="nav-link active">Inscription</a></li>
    <?php endif; ?>
  </ul>
<!--  <div class="header-action" id="menu_mobile">-->
<!--    <i class="fa-solid fa-bars"></i>-->
<!--  </div>-->
</header>