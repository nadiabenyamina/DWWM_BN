<?php

echo "Pensez à un personnage : Mademoiselle Rose, Professeur Violet,
Colonel Moutarde, Révérend Olive, Madame Leblanc.

Répondez par True (oui, vrai) ou False (non, faux)." . "\n";

$question1 = 1;
$question2 = 2;
$aleatoire = rand(1, 2);

// $question1 = readline("Votre personnage est-elle une femme ? ");
// $question1a = readline("A-t-elle des lunettes ? ");
// $repq1anon = readline("Vous pensez à Mademoiselle Rose.");
// $repq1aoui = readline("Vous pensez à Madame Leblanc.");

// // $question2 = readline("Est-ce un homme ? ");
// $question2a = readline("Porte-il un chapeau ? ");
// $repq2aoui = readline("Vous pensez au Professeur Violet.");
// $question2b = readline("A-t-il une moustache ? ");
// $repq2boui = readline("Vous pensez au Colonel Moutarde.");
// $repq2bnon = readline("Vous pensez au Révérend Olive.");


if ($aleatoire == 1) {
    $question1 = readline("Votre personnage est-elle une femme ? ");
    if ($question1 == true) {
    $question1a = readline("A-t-elle des lunettes ? ");
    } if ($question1a == true) {
        echo "Vous pensez à Madame Leblanc.";
    }
    else {
        echo "Vous pensez à Mademoiselle Rose.";
    }    
}

else {
    $question2 = readline("Est-ce un homme ? ");
    if ($question2 == true) {
        $question2a = readline("Porte-il un chapeau ? ");
        if ($question2a == true) {
            echo "Vous pensez au Professeur Violet";
        }
        else {
            $question2b = readline("A-t-il une moustache ? ");
            if ($question2b == true) {
                echo "Vous pensez au Colonel Moutarde.";
            }
            else {
                echo "Vous pensez au Révérend Olive.";
            }
        }
    }
}




// while ($question1 == true) {
//     if ($question1 == true) {
//         echo "A-t-elle des lunettes ? " 
//     }
// }

?>