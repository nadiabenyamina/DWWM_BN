<?php ob_start() ?>

<h1 class="title">AMERICAN DREAMS</h1>

<!-- à relier à la bdd -->
<table class="table text-center">
    <tr class="table-secondary">
        <th>Image</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Dessinateur</th>
        <th>Genre</th>
        <th>Pays</th>
        <th>Éditeur</th>
        <th>Date de sortie</th>
        <th>Prix de vente</th>
        <th>Nombre de pages</th>
        <th>Résumé</th>
        <!-- colspan = permet d'ajouter plusieurs colonnes dans la colonne principale -->
        <th colspan="2">Actions</th>
    </tr>

    <?php
        for($i=0; $i<count($bd); $i++) :
    ?>

    <tr>
        <td class="align-middle"><img src="images/<?= $bd[$i]->getImage()?>" width="60px;"></td>
        <td class="align-middle"><a href="<?= URL ?>bd/l/<?= $bd[$i]->getId(); ?>"><?= $bd[$i]->getTitre()?></td>
        <td class="align-middle"><?= $bd[$i]->getTitre()?></td>
        <td class="align-middle"><?= $bd[$i]->getAuteur()?></td>
        <td class="align-middle"><?= $bd[$i]->getDessinateur()?></td>
        <td class="align-middle"><?= $bd[$i]->getGenre()?></td>
        <td class="align-middle"><?= $bd[$i]->getPays()?></td>
        <td class="align-middle"><?= $bd[$i]->getEditeur()?></td>
        <td class="align-middle"><?= $bd[$i]->getDateSortie()?></td>
        <td class="align-middle"><?= $bd[$i]->getPrixVente()?></td>
        <td class="align-middle"><?= $bd[$i]->getNbPages()?></td>
        <td class="align-middle"><?= $bd[$i]->getResume()?></td>
        <td class="align-middle"><a href="<?= URL ?>bd/m/<?= $bd[$i]->getId() ?>" class="btn">Modifier</a></td>
        <td class="align-middle">
            <form method="POST" action="<?= URL ?>bd/s/<?= $bd[$i]->getId() ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le livre ?');">
                <button class="btn" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>

    <?php endfor; ?>

</table>

<a href="<?= URL ?>bd/a" class="btn">Ajouter</a>

<?php
$content = ob_get_clean();
require "template.php";
?>