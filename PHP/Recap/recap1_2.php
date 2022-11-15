<?php

$nombre = rand(0, 20);

if ($nombre < 7) {
    echo "Nombre : " . $nombre . "\n";
    echo "Bonjour";
} elseif ($nombre < 14) {
    echo "Nombre : " . $nombre . "\n";
    echo "Salut";
} elseif ($nombre >= 14) {
    echo  "Nombre : " . $nombre .  "\n";
    echo "Hello";
}

?>