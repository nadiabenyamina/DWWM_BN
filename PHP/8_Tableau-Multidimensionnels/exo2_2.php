<?php
// version Thibaut
// i = lignes, j = colonnes

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


// version Manon
// $garde="";
// $tab=[];
// for ($i=0;$i<7;$i++){
//     for($j=0;$j<$i+1;$j++){
//         if($j==0 or $j==$i){
//             $garde=$garde."X";
//             $tab[$i][$j]=$garde;
//         }
//         else{
//             $garde=$garde."O";
//             $tab[$i][$j]=$garde;
//         }
//     }
//     echo $garde."\n";
//     $garde="";
// }
// echo("XXXXXXXX")

?>