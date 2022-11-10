<?php

$element = readline("Choisissez le nombre d'élément que vous voulez : ");
$tab = [];

for ($i=0; $i<=$element; $i++) {
    $saisir = readline("Saisissez votre élément : ");
    $tab[$i] = $saisir;
}
    
for ($i=0; $i<count($tab)-1; $i++) {
    if ($tab[$i]!=$tab[$i+1]) {
        echo "Il n'y a pas de doublons.";
        break;
        }
        elseif ($tab[$i]==$tab[$i+1]) {
            echo  "Il y a un ou plusieurs doublons.";
            break;
        }
    }

?>