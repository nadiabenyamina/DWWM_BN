<?php

$valeur = readline("Choisissez le nombre de valeur que vous voulez entrer : ");
$tab = [];


for ($i=0; $i<=$valeur; $i++) {
    $saisir = readline("Saisissez un nombre : ");
    $tab[$i] = $saisir;
}
    
    
for ($i=0; $i<count($tab)-1; $i++) {
    if ($tab[$i+1]!=$tab[$i]+1) {
        echo "Les éléments du tableau ne sont pas consécutifs.";
        break;
        }
        elseif ($tab[$i+1]==$tab[$i]+1) {
            echo  "Les éléments du tableau sont consécutifs.";
            break;
        }
    }

?>