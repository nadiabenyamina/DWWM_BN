<?php

$saisie = readline("Entrez un nombre compris entre 100 et 1000 : ");
// rand() pour que le terminal puisse choisir un chiffre aléatoire parmis ceux choisi entre parenthèses
$valeur = rand(100, 1000);
// un compteur pour pouvoir compter le nombre d'itération
$compteur = 0;

// boucle tant que pour que le terminal continue à chercher le nombre saisie par l'utilisateur
// tant que la valeur aléatoire n'est pas égale à la saisie de l'utilisateur, le terminal doit continuer à donner des chiffres
// il s'arrêtera seulement quand il l'aura trouver, le compteur++ sert à compter le nombre d'itérations dans cette boucle
while ($valeur != $saisie){
    $valeur = rand(100, 1000);
    $compteur++;
}

// on affiche le compteur dans la boucle pour savoir combien de tour le terminal a fait pour trouver le nombre saisie au départ
echo "Le nombre d'itération est de : " . $compteur;

?>