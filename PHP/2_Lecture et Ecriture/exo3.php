<?php

$prixht = readline("Donner le prix : ");
$nombreart = readline("Donner le nombre d'articles : ");
define("TVA", 20/100); //define est une constante
$resultva = $prixht * $nombreart * TVA;
$ttc = $prixht * $nombreart + $resultva;

// autre solution, sans avoir à noter le define : $prixttc = $prixht * $nombreart * (1 + tva);

echo "Le prix TTC est de : " . $ttc;

?>