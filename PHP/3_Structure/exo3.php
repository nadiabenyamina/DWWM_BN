<?php

$nombre = readline("Entrer un nombre : ");

if ($nombre > 0) {
    echo "Ce nombre est positif.";
} elseif ($nombre < 0) {
    echo "Ce nombre est négatif.";
} else { //NE RIEN METTRE APRES ELSE !!!!
    echo "Ce nombre est nul.";
}

?>