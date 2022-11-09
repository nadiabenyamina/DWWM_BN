<?php

$tab = [41, 33, 3, 2, 7, 22, 19, 1, 97, 71, 8, 25];
$x = 1;

if (count($tab)%2==0) {

    for ($i=0; $i<(count($tab)/2); $i++) {
        $temp = $tab[count($tab)-$x];
        $tab[count($tab)-$x] = $tab[$i];
        $tab[$i] = $temp;
        $x++;
}
} else {
    for ($i=0;$i<(count($tab)/2)-0.5;$i++){
        $garde=$tab[$i];
        $tab[$i]=$tab[count($tab)-$x];
        $tab[count($tab)-$x]=$garde;
        $x++;
    }
}

foreach($tab as $valeur) {
    echo $valeur . "\n";
}

?>