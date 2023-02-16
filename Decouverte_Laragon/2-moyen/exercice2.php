<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-success"> Tableau de tableaux associatifs </h1>
</div>

<?php
require("fonction.php");

$tab = [array('Nom'=>'Marge', 'Age'=>39, 'Sexe'=>'Femme'),
        array('Nom'=>'Homer', 'Age'=>39, 'Sexe'=>'Homme'),
        array('Nom'=>'Lisa', 'Age'=>8, 'Sexe'=>'Femme'),
        array('Nom'=>'Bart', 'Age'=>10, 'Sexe'=>'Homme'),
        array('Nom'=>'Maggie', 'Age'=>1, 'Sexe'=>'Femme')];

// [0]... pour lire et afficher le premier tableau, [1] le deuxième, etc.
affiche($tab[0]);
affiche($tab[1]);
affiche($tab[2]);
affiche($tab[3]);
affiche($tab[4]);
?>

<?php
$content = ob_get_clean();
require "../template.php";
?>