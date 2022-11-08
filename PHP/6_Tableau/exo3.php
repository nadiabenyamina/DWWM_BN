<?php

$somme = 0;

$tab = [1, 2, 3, 7, 22, 19, 41];
for ($i=0; $i<count($tab); $i++) {
    $somme = $somme + $tab[$i];
}

echo "La somme du tableau est de : " . $somme;

?>