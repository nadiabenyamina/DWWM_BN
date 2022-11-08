<?php

$nombre = readline("Entrez un nombre : ");
$min = $nombre;
$max = $nombre;

for ($i=1; $i<=3; $i++) {
    $nombre = readline("Entrez un nombre : ");
    if ($max < $nombre) {
        $max = $nombre;
    }
    elseif ($min > $nombre) {
            $min = $nombre;
        }
    }
echo "$max . $min";

?>
