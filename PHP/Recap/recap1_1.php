<?php

$nombre = rand(1, 20);

if ($nombre <= 5) {
    echo "Il est compris entre 1 et 5.";
} elseif ($nombre <= 10) {
    echo "Il est compris entre 6 et 10";
} elseif ($nombre <= 15) {
    echo "Il est compris entre 11 et 15.";
} else {
    echo "Il est compris entre 16 et 20.";
}

?>