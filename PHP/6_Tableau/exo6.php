<?php

$note = readline("Choisissez le nombre de notes que vous voulez entrer : ");
$moyenne = 0;
$somme = 0;

$tab = [];
for ($i=0; $i<$note; $i++) {
    $saisir = readline("Saisissez une note : ");
    $moyenne = $saisir + $moyenne;
    $tab[$i] = $saisir;
}

$moyenne = $moyenne / $note;
    echo "La moyenne de la classe est de : " . $moyenne . "\n";

for ($i=0; $i<count($tab); $i++) {
    if ($tab[$i] > $moyenne) {
        $somme++;

    }
}

echo "Nombre de note supérieur à la moyenne de la classe : " . $somme;

?>