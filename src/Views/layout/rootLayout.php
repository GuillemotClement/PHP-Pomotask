<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PomoTask</title>
<!--  CSS-->
  <link rel="stylesheet" href="/css/styles.css">
<!--  JS-->
  <script src="/javascript/index.js" defer></script>
<!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
<header class="header">
  <a class="header-logo" href="/">
    <i class="fa-solid fa-list-check header-logo__logo"></i>
    <span class="header-logo__title">PomoTask</span>
  </a>
  <ul class="header-menu-nav">
    <li><a href="/">Accueil</a></li>
    <li><a href="/">Projets</a></li>
    <li><a href="/">Taches</a></li>
  </ul>
  <ul class="header-menu-action">
    <li><a href="/login" class="btn">Connexion</a></li>
    <li><a href="/" class="btn">Inscription</a></li>
    <li><a href="/" class="btn">Profil</a></li>
    <li><a href="/logout" class="btn">Deconnexion</a></li>
  </ul>
  <div class="header-action" id="menu_mobile">
    <i class="fa-solid fa-bars"></i>
  </div>
</header>
  <?= $content ?>
</body>
</html>
