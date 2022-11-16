<?php

// $tab=[];
// for ($i=1;$i<=5;$i++){
//     for ($j=1;$j<=5;$j++){
//         $tab[$i][$j]=$i*$j; 
//     }
//     echo(str_pad( implode("\t", $tab[$i]),10));
//     echo("\n");
// }

// $tab=[];
// for ($i=1;$i<=5;$i++){
//     for ($j=1;$j<=5;$j++){
//         $tab[$i][$j]=$i*$j; 
//     }
//     echo implode("\t", $tab[$i]);
//     echo("\n");
// }

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
       if ($j == 1) {
         echo str_pad($i * $j, 4, " ");
       } else {
         echo str_pad($i * $j, 6, " ");
       }
    }
    echo "\n";
  }

?>