<?php

$year = readline("Entrez l'année : ");

if (($year % 4 == 0) && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "C'est une année bissextile.";
} else {
    echo "C'est une année non-bissextile.";
}

?>