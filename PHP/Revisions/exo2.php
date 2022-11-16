<?php
$saisie = readline("Entrez un nombre : ");
$valeur = rand(100, 1000);
$compteur = 0;

while ($valeur != $saisie){
    $valeur = rand(100, 1000);
    $compteur++;
}

echo "Le nombre d'itération est de : " . $compteur;

?>