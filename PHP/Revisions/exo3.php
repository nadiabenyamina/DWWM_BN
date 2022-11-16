<?php
$saisie = readline("Entrez un nombre : ");
$valeur = rand(100, 1000);
$compteur = 0;

do {
    $valeur = rand(100, 1000);
    $compteur++;
}

while ($valeur != $saisie);

echo "Le nombre d'itération est de : " . $compteur;

?>