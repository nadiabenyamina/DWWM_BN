<?php

$phrase = readline("Entrez une phrase en minuscule : ");
// ucwords qui permet de mettre chaque première lettre de chaque mot en majuscule
// entre parenthèse, la variable concerné par cette foncion, ici $phrase pour pouvoir appliquer
// cette fonction sur la phrase saisie par l'utilisateur
$texte = ucwords("$phrase");
// echo pour afficher le résultat, $texte car la fonction se trouve dans cette variable et donc le résultat aussi
echo $texte;

?>