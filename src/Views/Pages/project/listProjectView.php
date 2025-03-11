<?php ob_start() ?>
<main class="container">
  <h1><?= $page ?></h1>
  <a href="/projects/create" class="btn btn-primary">Nouveau</a>
  <table class="table table-bordered">
    <thead class="table-light">
      <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Date de creation</th>
        <th>Actif</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data[0] as $project): ?>
        <tr>
          <td><?= $project['title'] ?></td>
          <td><?= $project['content'] ?></td>
          <td><?= $project['created_at'] ?></td>
          <td><?= $project['is_active'] ? 'Oui' : 'Non'?></td>
          <td>
            <a href="" class="btn btn-success">Detail</a>
            <a href="" class="btn btn-danger">supprimer</a>
          </td>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>
<?php $content = ob_get_clean() ?>

<?php require_once basePath("Views/layout/rootLayout") ?>
