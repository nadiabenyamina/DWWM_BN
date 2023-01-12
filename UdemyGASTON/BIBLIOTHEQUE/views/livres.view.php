<?php
ob_start()
?>

<table class="table text-center">
    <tr class="table-secondary">
        <th>Image</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Nombre de pages</th>
        <!-- colspan = permet d'ajouter plusieurs colonnes dans la colonne principale -->
        <th colspan="2">Actions</th>
    </tr>

    <?php
        for($i=0; $i<count($livres); $i++) :
    ?>

    <tr>
        <td class="align-middle"><img src="public/images/<?= $livres[$i]->getImage()?>" width="60px;"></td>
        <td class="align-middle"><?= $livres[$i]->getTitre()?></td>
        <td class="align-middle"><?= $livres[$i]->getAuteur()?></td>
        <td class="align-middle"><?= $livres[$i]->getNbPages()?></td>
        <td class="align-middle"><a href="" class="btn btn-outline-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-outline-danger">Supprimer</a></td>
    </tr>

    <?php endfor; ?>

</table>

<a href="" class="btn btn-outline-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les livres de la bibliothèque";
require "template.php";
?>