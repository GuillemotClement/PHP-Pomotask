<?php ob_start() ?>
<main>
  <h1><?= $page ?></h1>
  <form action="" method="POST">
    <div class="">
      <label for="title">Nom</label>
      <input type="text" id="title" name="title">
    </div>
    <div class="">
      <label for="content">Description</label>
      <textarea id="content" name="content"></textarea>
    </div>
    <div class="">
      <a href="/">Retour</a>
      <button type="submit" class="btn">Creer</button>
    </div>
  </form>
</main>
<?php $content = ob_get_clean() ?>

<?php require_once basePath("Views/layout/rootLayout") ?>
