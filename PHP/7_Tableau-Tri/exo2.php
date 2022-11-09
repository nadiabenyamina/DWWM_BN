<?php

$tab = [41, 33, 3, 2, 7, 22, 19, 1, 97, 71, 8];
$estVrai = true;

while ($estVrai) {
    $estVrai = false;

    for ($i=0; $i<=count($tab)-2; $i++) {
        if  ($tab[$i] < $tab[$i+1]) {
            $temp = $tab[$i];
            $tab[$i] = $tab[$i+1];
            $tab[$i+1] = $temp;
            $estVrai = true;
        }
    }
}

foreach ($tab as $valeur) {
    echo $valeur . "\n";
}

?>