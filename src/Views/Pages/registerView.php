<?php
?>
<?php ob_start() ?>
<main>
  <h1><?= $page ?></h1>
  <form action="" method="POST">
    <div class="">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" value="<?= $user_input['username'] ?? '' ?>">
    </div>
    <div class="">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" value="<?= $user_input['email'] ?? '' ?>">
    </div>
    <div class="">
      <label for="password">Mot de passe</label>
      <input type="password" name="password" id="password">
    </div>
    <div class="">
      <label for="confirm-password">Confirmation du mot de passe</label>
      <input type="password" name="confirm-password" id="confirm-password">
    </div>
<!--    --><?php //if($error['message']): ?>
<!--    <div class="form-error">-->
<!--      <p>--><?php //= $error['message'] ?? ''?><!--</p>-->
<!--    </div>-->
<!--    --><?php //endif; ?>
    <div class="">
      <a href="/" class="btn">Retour</a>
      <button type="submit" class="btn">
        Inscription
      </button>
    </div>
  </form>
</main>
<?php $content = ob_get_clean() ?>

<?php require_once basePath("Views/layout/rootLayout") ?>


