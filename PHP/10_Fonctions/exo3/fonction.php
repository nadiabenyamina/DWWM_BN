<?php

function ppmc($nb1, $nb2, $nba, $nbb){
    while (($nb1 * $nb2) != 0) {
    if ($nb1 > $nb2) {
        $nb1 = $nb1 - $nb2;
    }
    else {
        $nb2 = $nb2 - $nb1;
    }
}
if ($nb1 == 0) {
    echo "Le PPCM est : " . ($nba * $nbb / $nb2);
} else {
    echo "Le PPCM est : " . (($nba * $nbb) / $nb1);
}
}

?>