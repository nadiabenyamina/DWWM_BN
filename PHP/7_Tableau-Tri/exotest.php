<?php

    $tab = [5,2,3,4,1,9,8];
    $estVrai = true;

    while($estVrai){

        $estVrai = false;

        for ($i=0;$i<=count($tab)-2;$i++){

            if ($tab[$i] > $tab[$i+1]){
                $temp = $tab[$i];
                $tab[$i] = $tab[$i+1];
                $tab[$i+1] = $temp;
                $estVrai = true;
            }

        }

    }

    foreach($tab as $valeur){
        echo $valeur . "\n";
    }

?>