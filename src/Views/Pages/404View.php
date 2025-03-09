<?php ob_start() ?>
<main>
  <h1>Error 404</h1>
</main>
<?php $content = ob_get_clean() ?>

<?php require_once basePath("Views/layout/rootLayout") ?>


