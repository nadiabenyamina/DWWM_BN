<?php
$saisie = readline("Entrez un nombre : ");
$valeur = rand(100, 1000);
$compteur = 0;

// comme l'exercice 2 mais avec le do while
// dans le do on met les fonctions nécessaires à l'execution de la boucle
// donc on fait faire sortir un nombre aléatoire au terminal jusqu'à ce qu'il obtienne la saisie de l'utilisateur
// et on le fait compter les tours pour savoir combien de tour qu'il lui a fallu avant de le trouver
do {
    $valeur = rand(100, 1000);
    $compteur++;
}

// et dans le while, la condition qui doit être réalisé pour que la boucle s'arrête
// tant que la valeur n'est pas égale à la saisie, on fait "do" et on recommence la boucle
while ($valeur != $saisie);

echo "Le nombre d'itération est de : " . $compteur;

?>