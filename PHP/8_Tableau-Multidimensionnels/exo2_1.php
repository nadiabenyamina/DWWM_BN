<?php

//i=ligne
//j=colonne

$i = 0;
$j= 0;

for ($i=0; $i<=7; $i++){
    for ($j=0; $j<=7; $j++)
    if ($i>=0 or $i=7 or $j>=0 or $j=$i-1){
        echo "*" . "\n";
    }  
}

?>