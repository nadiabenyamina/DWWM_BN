<?php

function prixttc($prixht, $nombreart, $tauxtva){
    $tva = $tauxtva / 100;
    $resultva = $prixht * $nombreart * $tva;
    $ttc = $prixht * $nombreart + $resultva;
    return $ttc;
}

?>