<?php

// on pause la question à l'utilisateur via un readline
$table = readline("Entrer le nombre pour lequel vous voulez la table de multiplication : ");


// on vérifie que celui-ci entre bien un nombre entier ou réel avec cette fonction
(filter_var ($table, FILTER_VALIDATE_INT) != true);

// un saut de ligne pour aérer le code sur le terminal
echo "\n";

// puis on fait une boucle for pour que le terminal puisse faire le calcul de 0 à 10
for ($i=0; $i<=10; $i++) {
    // qu'on affiche ensuite avec echo, c'est à ce moment que le calcul sera effectué par le terminal
    echo "$table x " . $i . " = " . $i * $table . "\n";
}

echo "\n";

// un readline pour demander à l'utilisateur s'il veut continuer ou non
$continuer = readline("Voulez-vous continuer (O/N ? ");

// on répète le code dans la boucle while, tant que la condition est oui, on relance l'exercice, si non, on l'arrête
while ($continuer == "O"){
    $table = readline("Entrer le nombre pour lequel vous voulez la table de multiplication : ");

    // on vérifie de nouveau si le nombre est un entier ou un réel
    (filter_var ($table, FILTER_VALIDATE_INT) != true);

    echo "\n";

    for ($i=0; $i<=10; $i++) {
        echo "$table x " . $i . " = " . $i * $table . "\n";
    }

    echo "\n";

    $continuer = readline("Voulez-vous continuer (O/N ? ");

    if ($continuer == "N") {
        echo "Très bien, à bientôt !";
    }
}

?>