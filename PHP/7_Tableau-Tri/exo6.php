<?php

$tab1 = [5, 50, 23, 11];
$tab2 = [10, 1, 4, 3];
$tab3 = [];
$x = 0;

for ($i=4; $i<8; $i++) {
    for ($j=0; $j<count($tab2); $j++) {
        $tab3[$j] = $tab2[$j];
    }
    $tab3[$i] = $tab1[$x];
    $x++;
}


sort($tab3);
foreach ($tab3 as $value) {
    echo $value . "\n";
}

?>