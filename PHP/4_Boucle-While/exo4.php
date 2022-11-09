<?php

$nb1 = readline("Entrez le premier nombre : ");
$nb2 = readline("Entrez le deuxième nombre : ");

while (($nb1 * $nb2) != 0) {
    if ($nb1 > $nb2) {
        $nb1 = $nb1 - $nb2;
    }
    else {
        $nb2 = $nb2 - $nb1;
    }
}
if ($nb1 == 0) {
    echo "Le PGCD est : " . $nb2;
} else {
    echo "Le PGCD est : " . $nb1;
}

?>