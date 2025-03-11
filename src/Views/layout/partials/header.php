<?php
$user_id = $_SESSION['user_id'] ?? 0;
?>
<header class="header">
  <a class="header-logo" href="/">
    <i class="fa-solid fa-list-check header-logo__logo"></i>
    <span class="header-logo__title">PomoTask</span>
  </a>
  <ul class="header-menu-nav">
    <li><a href="/">Accueil</a></li>
    <li><a href="/projects">Projets</a></li>
    <li><a href="/">Taches</a></li>
  </ul>
  <ul class="header-menu-action">
    <?php if($user_id > 0): ?>
      <li><a href="/" class="btn">Profil</a></li>
      <li><a href="/logout" class="btn">Deconnexion</a></li>
    <?php else: ?>
      <li><a href="/login" class="btn">Connexion</a></li>
      <li><a href="/register" class="btn">Inscription</a></li>
    <?php endif; ?>
  </ul>
  <div class="header-action" id="menu_mobile">
    <i class="fa-solid fa-bars"></i>
  </div>
</header>