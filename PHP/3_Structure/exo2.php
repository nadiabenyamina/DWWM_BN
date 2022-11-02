<?php

$nb1 = readline("Entrez le premier nombre : ");
$nb2 = readline("Entrez le deuxième nombre : ");

if (($nb1 > 0 && $nb2 > 0) || ($nb1 < 0 && $nb2 < 0)) {
    echo "Ces nombres sont positifs.";
} else {
    echo "Ces nombres sont négatifs.";
}

?>