<?php

function factoriel($nombre, $fact){
    for ($i = 1; $i <= $nombre; $i++) {
        $fact = $fact * $i;
    }
    echo "Le factoriel de " . $nombre . " vaut " . $fact . ".";
}

?>