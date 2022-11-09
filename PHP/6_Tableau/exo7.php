<?php

$tab1 = [5, 50, 23, 11];
$tab2 = [10, 1, 4, 3];

$tab3 = [];
for ($i=0; $i<count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] * $tab2[$i];
    echo $tab3[$i] . "\n";
}

$somme = array_sum($tab3);
echo "La somme totale est de : " . $somme;

?>