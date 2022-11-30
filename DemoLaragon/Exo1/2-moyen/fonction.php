<?php
// Exercice 1 et 2
function affiche($tableau){
    foreach($tableau as $key => $value){
        echo $key . " : " . $value . "<br>";
    }
    echo "----------------------" . "<br>";
}

// Exercice 3
function afficherTableau($nbTab){
    for ($i=0; $i<count($nbTab); $i++) {
        echo " | " . $nbTab[$i];
    }
}

// moyenne = somme du tableau / le nombre de note
function calculerMoyenne($nbTab){
    $moyenne = array_sum($nbTab)/count($nbTab);
    echo "Moyenne du tableau : " . $moyenne;
}

// afficher s'il y a que des valeurs pairs ou non
function estTableauPair($nbTab){
    // ajouter boucle while
    for($i=0; $i<count($nbTab); $i++){
        if($nbTab[$i]%2 == 0){
            $bool = true;
        }
        else{
            $bool = false;
        }
    }
    return $bool;
}

// Exercice 4
function animaux($dicoAnimal, $typeAnimal){
    foreach($dicoAnimal as $key => $value){
        echo $typeAnimal==$dicoAnimal['Type'] ? $key . " : " . "$value" . "<br>" : "";
    }
    echo "<br>";
}

// Exercice 8
function vraiFaux($typeAnimal){
    // si $typeAnimal est vrai, on retourne (return) 'chat', si c'est faut, on retourne 'chien'
    if ($typeAnimal){
        return $typeAnimal = 'Chat';
    }
    else {
        return $typeAnimal = 'Chien';
    }
}

// Exercice 9
function elecVf($electrique){
    // comme la fonction vraiFaux
    if ($electrique){
        return $electrique = 'Oui';
    }
    else {
        return $electrique = 'Non';
    }
}

// Exercice 11
function woMan($woMan){
    if ($woMan){
        return $woMan = 'Homme';
    }
    else {
        return $woMan = 'Femme';
    }
}

// Exercice 12
function tabEd($tabLivres){
    $tabEd=[];
    for($i=0;$i<count($tabLivres);$i++){
        $tabEd[$i]=$tabLivres[$i]->getEdition();
    }
    $tabEd=array_unique($tabEd);
    return $tabEd;
}

function sdoublonsd($objet){
    $tab=[];
    for($i=0;$i<count($objet);$i++){
        $tab[$i]=$objet[$i]->getdate();
    }
    $tab=array_unique($tab);
    return $tab;
}
?>