<?php ob_start() ?>
<main>
  <h1><?= $page ?></h1>
  <a href="/projects/create">Nouveau</a>
  <ul>
    <?php foreach ($data[0] as $project): ?>
      <li><?= $project['title'] ?></li>
    <?php endforeach; ?>
  </ul>
  </ul>
</main>
<?php $content = ob_get_clean() ?>

<?php require_once basePath("Views/layout/rootLayout") ?>
