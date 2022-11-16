<?php

// i = lignes
// j = colonnes

$i = 1;
while ($i<8){
    for ($j=0; $j<$i; $j++){ //i = 5 : j = 0,1,2,3,4
        if ($i>6 or $i<=2 or $j== 0 or $j == $i-1 ) {
            echo "X";
        }
        else {
            echo "O";
        }
    }
    echo "\n";
    $i++;
}

?>