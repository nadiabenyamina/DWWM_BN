<?php ob_start();
require "class/classeperso.php";
require "class/classearme.php";
?>
<?php
// Ajouts des identifiants d'armes aux persos
$perso1->setidarme($arme3->getidentifiant());
$perso2->setidarme($arme2->getidentifiant());
$perso3->setidarme($arme3->getidentifiant());
$perso4->setidarme($arme1->getidentifiant());
?>

<!-- Affichage -->
<h2>Voici les personnages et armes</h2>
<div class="d-flex flex-wrap justify-content-evenly my-5">
    <!-- Parcours personnages -->
    <?php foreach ($persos as $per) { ?>
        <!-- Cards -->
        <div class="card" style="width: 18rem;">
            <img src="img/<?= $per->getnom() ?>.png" style="height:300px">
            <div class="row mx-1 mb-3">
                <!-- Affiche les données de chaque perso -->
                <div class=" col">
                    <h4 class="card-title"><?= $per->getNom() ?></h4>
                    <p class="card-text">Force : <?= $per->getforce() ?>/100</p>
                    <p class="card-text">Pv : <?= $per->getpv() ?>/1M</p>
                </div>
                <?php
                // Si l'identifiant de l'arme du perso est = à celle de l'arme. Alors, on affiche l'arme trouvée.
                foreach ($armes as $value) :
                    if ($per->getidarme() == $value->getidentifiant()) : ?>
                        <div class=" col">
                            <h4 class="card-title">Arme N° <?= $value->getidentifiant() ?></h4>
                            <p class="card-text">Arme : <?= $value->getnom() ?></p>
                            <p class="card-text">Dégât : <?= $value->getdegat() ?>/100</p>
                        </div>
                <?php endif;
                endforeach; ?>
            </div>
        </div>
    <?php } ?>
</div>


<?php $content = ob_get_clean();
$titre = "Exercice Moyen";
require "../template.php";
?>