<?php ob_start() ?>
<main class="container">
  <h1><?= $page ?></h1>
  <form action="" method="POST" class="border rounded ">
    <div class="mb-3 d-flex flex-column">
      <label for="title" class="form-label">Nom</label>
      <input type="text" id="title" name="title" class="form-text">
    </div>
    <div class="">
      <label for="content">Description</label>
      <textarea id="content" name="content"></textarea>
    </div>
    <div class="">
      <a href="/" class="btn btn-warning">Retour</a>
      <button type="submit" class="btn btn-primary">Creer</button>
    </div>
  </form>
</main>
<?php $content = ob_get_clean() ?>

<?php require_once basePath("Views/layout/rootLayout") ?>
