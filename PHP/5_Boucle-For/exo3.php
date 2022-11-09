<?php

$nombre = readline("Entrez un nombre : ");
$fact = 1;
for ($i = 1; $i <= $nombre; $i++) {
    $fact = $fact * $i;
}
echo "Le factoriel de " . $nombre . " vaut " . $fact . ".";

?>