<?php ob_start() ?>
<main>
  <h1><?= $page ?></h1>
  <form action="/login" method="POST">
    <div class="">
      <label for="username">Pseudo</label>
      <input type="text" id="username" name="username">
    </div>
    <div class="">
      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password">
    </div>
    <div class="">
      <button type="submit" class="btn">Connexion</button>
    </div>
  </form>
</main>
<?php $content = ob_get_clean() ?>

<?php require_once basePath("Views/layout/rootLayout") ?>


