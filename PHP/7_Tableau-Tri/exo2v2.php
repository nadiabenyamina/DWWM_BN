<?php
$tab = [5,2,3,4,1,9,8];

for ($i=0;$i<=count($tab)-2;$i++){
    $min=$i;
    for($j=$i+1;$j<count($tab);$j++){
        if ($tab[$j]<$tab[$min]){
            $min=$j;

        }
    }
    $temp=$tab[$min];
    $tab[$min]=$tab[$i];
    $tab[$i]=$temp;
}

foreach($tab as $valeur){
    echo $valeur . "\n";
}
?>