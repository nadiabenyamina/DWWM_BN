<?php ob_start() ?>

<form method="POST" action="<?= URL ?>livres/mv" enctype="multipart/form-data">
  <div class="form-group mb-3">
    <label for="titre" class="form-label">Titre :</label>
    <input type="text" class="form-control" id="titre" name="titre" value="<?= $livre->getTitre() ?>">
  </div>
  <div class="form-group mb-3">
    <label for="nbPages" class="form-label">Nombre de pages :</label>
    <input type="number" class="form-control" id="nbPages" name="nbPages" value="<?= $livre->getNbPages() ?>">
  </div>
  <h3>Images :</h3>
  <img src="<?= URL ?>public/images/<?= $livre->getImage() ?>">
  <div class="form-group mb-3">
    <label for="image" class="form-label">Changer l'image :</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
  <div class="d-flex justify-content-center">
    <input type="hidden" name="identifiant" value="<?= $livre->getId(); ?>">
    <button type="submit" class="btn btn-lg btn-outline-info">Valider</button>
  </div>
</form>

<?php
$content = ob_get_clean();
$titre = "Modification du livre : ".$livre->getId();
require "template.php";
?>