<?php

$nombre = readline("Entrez un nombre : ");

while ($nombre < 10 || $nombre > 20) {
    $nombre = readline("Recommence : ");
    if ($nombre < 10) {
        echo "Plus grand ! ";
    }
    elseif ($nombre > 20) {
        echo "Plus petit ! ";
    }
    else {
        echo "Bravo, tu veux une médaille ?";
    }
}

?>