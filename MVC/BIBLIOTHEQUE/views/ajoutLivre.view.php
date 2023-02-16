<?php ob_start() ?>

<form method="POST" action="<?= URL ?>livres/av" enctype="multipart/form-data">
  <div class="form-group mb-3">
    <label for="titre" class="form-label">Titre :</label>
    <input type="text" class="form-control" id="titre" name="titre">
  </div>
  <div class="form-group mb-3">
    <label for="nbPages" class="form-label">Nombre de pages :</label>
    <input type="number" class="form-control" id="nbPages" name="nbPages">
  </div>
  <div class="form-group mb-3">
    <label for="image" class="form-label">Image :</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-lg btn-outline-info">Valider</button>
  </div>
</form>

<?php
$content = ob_get_clean();
$titre = "Ajout d'un livre";
require "template.php";
?>