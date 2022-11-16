<?php

$nombre = readline("Entrez un nombre pair et divisible par 3 : ");
$essai = 0;

if ($nombre % 3 == 0 && $nombre % 2 == 0){ 
    echo "$nombre est divisible par 3 et il est pair. Bien joué !" . "\n";
} elseif ($nombre % 3 == 0 && $nombre % 2 != 0) { 
    $essai++;
    echo "$nombre est divisible par 3 et il est impair." . "\n";
    echo "***** Essai numéro " . $essai . "*****";
}

if ($nombre % 3 != 0 && $nombre % 2 == 0){
    $essai++;
    echo "$nombre est pair mais n'est pas divisible par 3." . "\n";
    echo "***** Essai numéro " . $essai . "*****";
} elseif ($nombre % 3 != 0 && $nombre % 2 != 0) {
    $essai++;
    echo "$nombre est impair et n'est pas divisible par 3." . "\n";
    echo "***** Essai numéro " . $essai . "*****";
}

?>