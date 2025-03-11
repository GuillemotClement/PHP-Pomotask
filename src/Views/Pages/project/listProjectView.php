<?php ob_start() ?>
<main>
  <h1><?= $page ?></h1>
  <a href="/projects/create">Nouveau</a>
</main>
<?php $content = ob_get_clean() ?>

<?php require_once basePath("Views/layout/rootLayout") ?>
