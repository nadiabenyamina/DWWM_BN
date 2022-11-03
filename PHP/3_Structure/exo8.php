<?php

$nombre = readline("Entrez un nombre : ");
$fac30 = (0.10 * 10) + (0.09 * 20) + (0.08 * ($nombre - 30));
$fac20 = 0.10 * 10 + 0.09;
$fac10 = $nombre * 0.10;

if ($nombre >= 30) {
    echo "La facture est de : " . $fac30;
} elseif ($nombre > 10 && $nombre < 30) {
    echo "La facture est de : " . $fac20;
} else {
    echo "La facture est de : " . $fac10;
}

?>