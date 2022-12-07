<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-danger"> Héritage </h1>
</div>

<?php
require ('class/class_employe.php');
require ('class/class_cadre.php');

$employe1 = new Employe("Jean", "Neymar", 1850389546458, 1500.56, "Soudeur");
$employe2 = new Employe("Simon", "Jeremy", 179028955812, 1700.47, "Assistant Mécanicien");
$employe3 = new Employe("Odile", "Deray", 285097154678, 1900.14, "Magasinière");

$employes = [$employe1, $employe2, $employe3];

$cadre = new Cadre("Alain", "Deloin", 1840259453666, 2100.23, "Chef Maintenance", ["Jean Neymar", "Odile Deray"]);
?>

<div>
    <?php
    foreach($employes as $teams)
    {
        echo $teams;
        echo $teams->effectueSonJob();
    }
    echo $cadre;
    echo $cadre->effectueSonJob();
    echo $cadre->manage();
    ?>
</div>

<?php
$content = ob_get_clean();
require "../template.php";
?>