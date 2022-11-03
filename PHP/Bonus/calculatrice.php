<?php

$nb1 = readline("Entrez le premier nombre : ");
$nb2 = readline("Entrez le deuxième nombre : ");
$result = $nb1 * $nb2;

while (($nb1 * $nb2) >= 0) {
    $nb1 = readline("Entrez le premier nombre : ");
    $nb2 = readline("Entrez le deuxième nombre : ");
    $result = $nb1 * $nb2;
    echo $result;
}

?>