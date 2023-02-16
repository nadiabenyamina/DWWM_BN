<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-info"> Pair ou Impair </h1>
</div>

<div>
    <p> Le premier nombre vaut 5 et le deuxième nombre vaut 122.</p>
</div>

<?php
$nb1 = 5;
$nb2 = 122;

// on appelle la fonction après avoir créer les variables.
pair($nb1, $nb2);

function pair($nb1, $nb2){
    if($nb1%2 == 0){
        echo $nb1 . " est un nombre pair et ";
    }
    else {
        echo $nb1 . " est un nombre impair et ";
    }

    if($nb2%2 == 0){
        echo $nb2 . " est un nombre pair.";
    }
    else {
        echo $nb2 . " est un nombre impair.";
    }
};
?>

<?php
$content = ob_get_clean();
require "../template.php";
?>