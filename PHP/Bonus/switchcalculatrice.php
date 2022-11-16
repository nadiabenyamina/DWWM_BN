<?php

$nb1 = readline("Choisissez un nombre : ");
$nb2 = readline("Choisissez un second nombre : ");

echo "Choisissez l'opération à effectuer," . "\n";
echo "1. Addition" . "\n";
echo "2. Multiplication" . "\n";
echo "3. Soustraction" . "\n";
echo "4. Division" . "\n";
$question = readline("Que choisissez vous ? ");

switch ($question) {
    case 1 :
        echo "Le résultat de votre opération est : " . $nb1 + $nb2;
        break;
    case 2 :
        echo "Le résultat de votre opération est : " . $nb1 * $nb2;
        break;
    case 3 :
        echo "Le résultat de votre opération est : " . $nb1 - $nb2;
        break;
    case 4 :
        echo "Le résultat de votre opération est : " . $nb1 % $nb2;
        break;
}

?>