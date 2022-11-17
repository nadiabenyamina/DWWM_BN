<?php

// je crée un tableau associatif que j'appelle "element" en rapport avec le tableau des éléments chimiques
// dans array je note les 10 éléments à afficher
$element = array("H : Hydrogène", "He : Hélium", "P : Phosphore", "V : Vanadium", "Pb : Plomb", "I : Iode", "Kr : Krypton", "X : Xénon", "Rn : Radon", "Zr : Zirconium");


echo "***** Tableau périodique des éléments chimiques *****" . "\n";

// on aère le code sur le terminal
echo "\n";

// on fait un foreach pour parcourir le tableau qu'on assigne à la variable tableau
// qu'on affichera ensuite grâce à l'echo
foreach ($element as $tableau){
    echo $tableau . "\n";
}

echo "\n" . "*********************" . "\n" . "Tableau trié : " . "\n" ;

// on utilise la fonction sort() pour trier le tableau dans l'ordre croissant
sort($element);

// puis on refait un second foreach pour le parcourir et l'afficher dans cet ordre croissant
foreach ($element as $tableau){
    echo $tableau . "\n";
}

?>