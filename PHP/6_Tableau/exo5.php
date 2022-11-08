<?php

$valeur = readline("Choisissez le nombre de valeur que vous voulez entrer : ");
$max = -10000;
$index = 0;

for ($i=0; $i<$valeur; $i++) {
    $saisir = readline("Saisissez un nombre : ");
    if ($saisir > $max) {
        $max = $saisir;
        $index = $i;
    }
}

echo "La plus grande valeur est : ".$max." , à l'index : ".$index ;

?>