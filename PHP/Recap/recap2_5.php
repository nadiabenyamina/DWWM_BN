<?php
// i = ligne
// j = colonne

$tab = [];

for ($i=1; $i<=5; $i++){
    for ($j=1; $j<=5; $j++){
        $tab[$i][$j] = $i * $j;
        echo $tab[$i][$j] . "\t";
    }
    echo "\n";
}

?>