<?php

function somme($tab, $somme){
    for ($i=0; $i<count($tab); $i++) {
        $somme = $somme + $tab[$i];
    }
    
    echo "La somme du tableau est de : " . $somme;
}

?>