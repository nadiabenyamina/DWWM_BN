<?php

require("fonction.php");

$prenom = readline("Votre prénom : ");
$nom = readline("votre nom : ");

echo "\n";

$nb = readline("Nombre : ");
$result = calculCarre($nombre);
echo "Résultat : " . $result;

?>