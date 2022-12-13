<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-danger"> Héritage 1 </h1>
</div>

<?php
require ('class/15_employe.php');
require ('class/15_cadre.php');

// instanciation
$employe1 = new Employe("Jean", "Neymar", 1850389546458, 1500.56, "Soudeur");
$employe2 = new Employe("Simon", "Jeremy", 179028955812, 1700.47, "Assistant Mécanicien");
$employe3 = new Employe("Odile", "Deray", 285097154678, 1900.14, "Magasinière");

// regroupage
$employes = [$employe1, $employe2, $employe3];

// []->nom de ses employés
$cadre = new Cadre("Deloin", "Alain", 1840259453666, 2100.23, "Chef Maintenance", ["Jean Neymar", "Odile Deray"]);
?>

<div>
    <?php
    // boucle pour parcourir tableau
    foreach($employes as $teams)
    {
        // affiche tableau, affiche l'explication du job
        echo $teams;
        echo $teams->effectueSonJob();
    }
    // affiche les infos du cadre, son job, ceux qu'il manage
    echo $cadre;
    echo $cadre->effectueSonJob();
    echo $cadre->manage();

    // affiche l'augmentation des salaires
    echo $cadre->augmenteUnSalarie($employe1);
    echo "<br>";
    echo $cadre->augmenteUnSalarie($employe3);
    ?>
</div>

<?php
$content = ob_get_clean();
require "../template.php";
?>