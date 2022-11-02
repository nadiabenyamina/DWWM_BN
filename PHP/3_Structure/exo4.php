<?php

$nb1 = readline("Entrer le premier nombre : ");
$nb2 = readline("Entrer le deuxième nombre : ");


if ($nb1 == 0 || $nb2 == 0) {
    echo "Ce nombre est nul.";
} elseif (($nb1 > 0 && $nb2 > 0) || ($nb1 < 0 && $nb2 > 0)) {
    echo "Ce nombre est positif.";
} else {
    echo "Ce nombre est négatif.";
}

?>