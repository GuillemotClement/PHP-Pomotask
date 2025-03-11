
<?php
renderPartial('head');
renderPartial('header');
?>
<div class="flex-grow-1">
  <?= $content ?>
</div>

<?php
renderPartial("footer");
?>

