<?php

$sexe = readline("Entrez votre sexe : ");
$age = readline("Entrez votre âge : ");

if (($sexe == "homme" && $age >= 20) || ($sexe == "femme" && $age >= 18 && $age <= 35)) {
    echo "Imposable";
} else {
    echo "Non-imposable";
}

?>