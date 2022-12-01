<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-warning"> Maison - méthode statique </h1>
</div>

<?php require ('class_maison.php') ?>

<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Date</th>
    <th scope="col">Nombre de chambre</th>
    <th scope="col">Surface en m²</th>
  </tr>
</thead>
<tbody>
  <?php foreach ($home as $value) : ?>
  <tr>
    <th scope="row"> <?= $value->getidMaison() ?> </th>
    <td> <?= $value->getDate() ?> </td>
    <td> <?= $value->getChambre() ?> </td>
    <td> <?= $value->getSurface() ?> </td>
  </tr>
  <?php endforeach ?>
</tbody>
</table>

<?php
$content = ob_get_clean();
require "../template.php";
?>