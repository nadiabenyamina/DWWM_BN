<?php

$phrase = readline("Ecrivez une phrase : ");
$voyelle = ["a", "e", "i", "o", "u", "y"];
$compteurVoyelle = 0;
$letters = str_split($phrase); //str_split convertit une chaîne de caractères en tableau

// count(letters) pour pouvoir parcourir la phrase saisie par l'utilisateur qui a été transformé en tableau avec la fonction str_split
for ($i=0; $i<count($letters) ; $i++){
    // $j pour parcourir le second tableau, celui des voyelles
    for ($j=0; $j<count($voyelle); $j++){
        // on compte le nombre de voyelles dans la phrase
        if ($letters[$i] == $voyelle[$j]){
            // ++ pour ajouter +1 à chaque voyelle comptait par la variable
            $compteurVoyelle++;
        }
    }
}
// on affiche le compteur de voyelles pour afficher le nombre de voyelles dans la phrase saisie précédemment
echo "Il y a " . $compteurVoyelle . " voyelles dans votre phrase.";

?>