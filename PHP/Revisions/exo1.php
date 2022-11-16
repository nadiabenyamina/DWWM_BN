<?php

// un echo pour afficher la consigne
echo "Entrez un montant en euro, seulement les chiffres puis appuyer sur entrée.
Ensuite, choisissez dans quelle devise vous voulez le convertir. \n";

// un echo \n pour passer une ligne entre la consigne et la saisie
echo "\n";

// on crée la variable pour que l'utilisateur puisse saisir son chiffre
$euro = readline("Saisissez votre montant : ");

// comme le premier, on passe une ligne entre la saisie et le menu pour que ce soit plus lisible
echo "\n";

// ici le menu pour que l'utilisateur choisisse sa conversion
echo "Choisissez l'opération à effectuer," . "\n";
echo "1. Convertir en Livre Sterling (£, Angleterre)" . "\n";
echo "2. Convertir en Dollar Américain ($, États-Unis)" . "\n";
echo "3. Convertir en Dollar Canadien (CA$, Canada)" . "\n";
echo "4. Convertir en Yen (¥, Japon)" . "\n";
echo "5. Convertir en Pesos (MX$, Mexique)" . "\n";

// ici la question pour qu'il entre un des 5 chiffres, une fois choisi on entre dans le switch
$question = readline("Que choisissez vous ? ");

echo "\n";

// symbole des devises étrangères : uk = £ ; usa = $ ; can = CA$ ; jpn = ¥ ; mxc = MX$

// on crée le switch avec la variable menu entre parenthèse pour que l'utilisateur
// puisse avoir la conversion qu'il aura choisi juste avant
switch($question){
    case 1 :
        // 1€ vaut 0.87£ (Angletter) au 16.11.2022 donc on multiplie la saisie de l'utilisateur par ce taux pour avoir la conversion en livre sterling
        $uk = $euro * 0.87;
        echo "Votre montant après convertion vaut " . $uk . " £";
    break;
    
    case 2 :
        // 1€ vaut 1.04$ (USA) au 16.11.2022
        $usa = $euro * 1.04;
        echo "Votre montant après convertion vaut " . $usa . " $";
    break;

    case 3 :
        // 1€ vaut 1.38CA$ (Canada) au 16.11.2022
        $can = $euro * 1.38;
        echo "Votre montant après conversion vaut " . $can . " CA$";
    break;

    case 4 :
        // 1€ vaut 144,77¥ (Japon) au 16.11.2022
        $jpn = $euro * 144.77;
        echo "Votre montant après convertion vaut " . $jpn . " ¥";
    break;

    case 5 :
        // 1€ vaut 20,06 MX$ (Mexique) au 16.11.2022
        $mx = $euro * 20.06;
        echo "Votre montant après convertion vaut " . $mx . " MX$";
    break;
    }

?>