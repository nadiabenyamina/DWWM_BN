<?php

echo "Pensez à un personnage : Mademoiselle Rose, Professeur Violet,
Colonel Moutarde, Révérend Olive, Madame Leblanc.

Répondez par True (oui, vrai) ou False (non, faux)." . "\n";

$question1 = 1;
$question2 = 2;
$aleatoire = rand(1, 2);



if ($aleatoire == 1) {
    $question1 = readline("Est-ce une femme ? ");
    if ($question1 = false) {
        $question2;
    }
    elseif ($question1 = true) {
    $question1a = readline("A-t-elle des lunettes ? ");
    } if ($question1a = true) {
        echo "Vous pensez à Madame Leblanc.";
    }
    elseif ($question1a =  FALSE){
        echo "Vous pensez à Mademoiselle Rose.";
    }
}

if ($aleatoire == 2) {
    $question2 = readline("Est-ce un homme ? ");
    if ($question2 = FALSE) {
        $question1;
    }
    elseif ($question2 = true) {
        $question2a = readline("Porte-il un chapeau ? ");
        if ($question2a = true) {
            echo "Vous pensez au Professeur Violet";
        }
        if ($question2a = false) {
            $question2b = readline("A-t-il une moustache ? ");
            if ($question2b = true) {
                echo "Vous pensez au Colonel Moutarde.";
            }
            else {
                echo "Vous pensez au Révérend Olive.";
            }
        }
    }
}

?>