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


    // echo("Pensez à un personnage : Melle Rose, le professeur Violet, le Colonet Moutarde, Le Révérend Olive et Mme Leblanc.\n");
    // echo("True : oui; False: non\n");

    // $qS=readline("Est-ce que votre personnage est un homme ? ");

    // if($qS=="true"){
    //     $qS=true;
    // }
    // elseif($qS=="false"){
    //     $qS=false;
    // }

    // if($qS==true){
    //     $qM=readline("Votre personnage porte-t-il des moustaches ? ");
       
    //     if($qM=="true"){
    //         $qM=true;
    //     }
    //     elseif($qM=="false"){
    //         $qM=false;
    //     }
        
       
    //     if($qM==true){
    //         $R="le Colonet Moutarde.";
    //     }
        
    //     else{   
    //         $qC=readline("Votre personnage porte-t-il un chapeau ? ");

    //         if($qC=="true"){
    //             $qC=true;
    //         }
    //         elseif($qC=="false"){
    //             $qC=false;
    //         }

    //         if ($qC==true){
    //             $R= "Le professeur Violet.";
    //         }
    //         else{
    //             $R="le Révérend Olive.";
    //         }

    //     }

        
    // }




    // elseif($qS==0){
    //     $qL=readline("Votre personnage porte-t-il des lunettes ? ");
        
    //     if($qL=="true"){
    //         $qL=true;
    //     }
    //     elseif($qL=="false"){
    //         $qL=false;
    //     }


    //     if($qL==true){
    //         $R="Mme Leblanc.";
    //     }
    //     else{
    //         $R="Melle Rose.";
    //     }
    // }

    // echo("Réponse : Le personnage auquel vous pensez est ".$R)
?>