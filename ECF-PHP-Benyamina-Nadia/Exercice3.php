<?php

echo "Racine de l'équation de 2nd degré" . "\n";
echo "Y = ax² + bx + c" . "\n";

echo "\n";

// les readline pour que l'utilisateur puisse entrer les 3 valeurs (a, b et c)
$a = readline("Quelle est la valeur de a : ");
$b = readline("Quelle est la valeur de b : ");
$c = readline("Quelle est la valeur de c : ");

// on vérifie que l'utilisateur entre bien un nombre entier ou réel pour les 3 variables
(filter_var ($a, FILTER_VALIDATE_INT) != true);
(filter_var ($b, FILTER_VALIDATE_INT) != true);
(filter_var ($c, FILTER_VALIDATE_INT) != true);

// on aère le code sur le terminal
echo "\n";

// le calcul pour trouver Delta
$delta = $b * $b - 4 * $a * $c;

// j'utilise if / elseif pour remplir les conditions
if ($delta < 0){
    // si delta est inférieur à 0 :
    echo "L'équation ne possède pas de racine réelle" . "\n";
    // et on affiche le résultat
    echo "Delta = " . $delta;
}
// sinon si delta est égal à 0 :
elseif ($delta == 0){
    $x1 = $x2 = -($b / (2 * $a));
    echo "L'équation possède une racine double : " . "\n";
    echo "Delta = " . $delta . "\n";
    echo "X1 = X2 = " . $x1 . "\n";
}
// et enfin sinon si delta est supérieur à 0
elseif ($delta > 0){
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "L'équation possède 2 racines dinstinctes : " . "\n";
    echo "Delta = " . $delta . "\n";
    echo "L'équation s'annule pour : " . "\n";
    echo "X1 = " . $x1 . "\n";
    echo "X2 = " . $x2 . "\n";
}

echo "\n";

$question = readline("Voulez-vous recommencer (O/N) ? ");

// et on utilise la boucle while, tant que la question est oui, on relance la boucle
while ($question == "O"){
    $a = readline("Quelle est la valeur de a : ");
    $b = readline("Quelle est la valeur de b : ");
    $c = readline("Quelle est la valeur de c : ");

    (filter_var ($a, FILTER_VALIDATE_INT) != true);
    (filter_var ($b, FILTER_VALIDATE_INT) != true);
    (filter_var ($c, FILTER_VALIDATE_INT) != true);

    echo "\n";

    $delta = $b * $b - 4 * $a * $c;

    if ($delta < 0){
        echo "L'équation ne possède pas de racine réelle" . "\n";
        echo "Delta = " . $delta;
    }
    elseif ($delta == 0){
        $x1 = $x2 = -($b / (2 * $a));
        echo "L'équation possède une racine double : " . "\n";
        echo "Delta = " . $delta . "\n";
        echo "X1 = X2 = " . $x1 . "\n";
    }
    elseif ($delta > 0){
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "L'équation possède 2 racines dinstinctes : " . "\n";
        echo "Delta = " . $delta . "\n";
        echo "L'équation s'annule pour : " . "\n";
        echo "X1 = " . $x1 . "\n";
        echo "X2 = " . $x2 . "\n";
    }

    echo "\n";

    $question = readline("Voulez-vous recommencer (O/N) ? ");

    // ici un if pour pouvoir stoper la boucle quand l'utilisateur choisira N (non)
    // si la question est non, alors on arrête le programme
    if ($question == "N") {
        echo "Très bien. Au revoir et à bientôt !";
    }
}

?>