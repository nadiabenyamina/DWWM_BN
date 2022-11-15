<?php

require("fonction.php");

$prixht = readline("Donner le prix : ");
$nombreart = readline("Donner le nombre d'articles : ");
$tauxtva = readline("Taux tva : ");

$result = prixttc($prixht, $nombreart, $tauxtva);
echo "Resultat : " . $result;

?>