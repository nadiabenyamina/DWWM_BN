<?php

$nombre = readline("Entrez un nombre : ");

while ($nombre < 1 || $nombre > 3) {
    $nombre = readline("Recommence, entrez un autre nombre : ");
}

?>