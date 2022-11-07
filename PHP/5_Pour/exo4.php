<?php

$nb1 = readline("Entrez un nombre : ");
$nb2 = readline("Entrez un nombre : ");
$nb3 = readline("Entrez un nombre : ");
$nb4 = readline("Entrez un nombre : ");
$nb5 = readline("Entrez un nombre : ");

$result = array($nb1, $nb2, $nb3, $nb4, $nb5);
sort ($result);
foreach ($result as $key => $val) {
    echo "Résultat (" . $key . ") : " . $val . "\n";
}

?>