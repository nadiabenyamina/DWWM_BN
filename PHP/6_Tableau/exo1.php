<?php

$total = 0;

$tab = [];
for ($i=1;$i<=9;$i++) {
    $saisir = readline("Entrez un nombre : ");
    $tab = $saisir;
    $total = $saisir + $total;
}

$total = $total / 9;
echo "La moyenne est de : " . $total;

?>