<?php

echo "*********************" . "\n";
echo "CALCUL SUR LE CERCLE" . "\n";
echo "*********************" . "\n";

// je commence d'abord par écrire l'énoncé pour que l'utilisateur sache ce qu'il doit faire
echo "Nous allons calculer la circonférence et la surface du cercle." . "\n";

// ici un readline pour que l'utilisateur puisse entrer le rayon du cercle
$question = readline("Quel est le rayon du cercle : ");

// on vérifie que celui-ci entre bien un nombre entier ou réel avec cette fonction
(filter_var ($question, FILTER_VALIDATE_INT) != true);


// les 2 opérations à faire pour calculer la circonférence ainsi que la surface du cercle
// π = 3.14
$circonference = 2 * $question * 3.14;
$surface = 3.14 * ($question * $question);


// une fois que le terminal aura fait les calculs, on affiche les résultats obtenus
echo "Sa circonférence est de : " . $circonference . "\n";
echo "Sa surface est de : " . $surface . "\n";

// je passe une ligne pour aérer le code affiché sur le terminal
echo "\n";

// et on lui pose une nouvelle question avec un nouveau readline pour que l'utilisateur puisse répondre
$nouveauCalcul = readline("Voulez-vous faire un autre calcul (O/N) ? : ");


// j'utilise une boucle while pour qu'à chaque fois que l'utilisateur met "O" (oui), la boucle se relance 
// et il devra de nouveau entrer le rayon de son cercle
while ($nouveauCalcul == "O"){
    $question = readline("Quel est le rayon du cercle : ");
    $circonference = 2 * $question * 3.14;
    $surface = 3.14 * ($question * $question);

    echo "Sa circonférence est de : " . $circonference . "\n";
    echo "Sa surface est de : " . $surface . "\n";

    $nouveauCalcul = readline("Voulez-vous faire un autre calcul (O/N) ? : ");

    // on vérifie à chaque fois que l'utilisateur entre bien un nombre entier ou réel
    (filter_var ($question, FILTER_VALIDATE_INT) != true);
    
    // ici un if pour pouvoir stoper la boucle quand l'utilisateur choisira N (non)
    if ($nouveauCalcul == "N") {
        echo "Très bien. Au revoir et à bientôt !";
    }
}

?>