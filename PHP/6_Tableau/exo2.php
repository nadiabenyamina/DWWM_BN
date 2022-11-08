<?php

$valeur = readline("Choisissez le nombre de valeur que vous voulez entrer : ");
$pos = 0;
$neg = 0;

$tab = [];
for ($i=0; $i<=$valeur; $i++) {
    $nombre = readline("Entrez un nombre positif ou négatif : ");
    if ($nombre > 0) {
        $pos++;
    }
    elseif ($nombre < 0) {
        $neg++;
    }
}

echo "Nombre de valeur positive : " . $pos . "\n" . "Nombre de valeur négative : " . $neg;

?>