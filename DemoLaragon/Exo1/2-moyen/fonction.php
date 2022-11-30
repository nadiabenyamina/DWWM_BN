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
function doublons($tabBook){
    $tab=[];
    for($i=0;$i<count($tabBook);$i++){
        $tab[$i]=$tabBook[$i]->getEdition();
    }
    $tab=array_unique($tab);
    return $tab;
}
// fonction pour enlever les doublons dans les dates et les éditions avec une boucle for
function doublon($tabDate){
    $tab=[];
    // on parcourt le tableau avant de lui affecter les valeurs contenu dans getDate() ou getEdition()
    for($i=0;$i<count($tabDate);$i++){
        $tab[$i]=$tabDate[$i]->getDate();
    }
    // puis on utilise la fonction array_unique() pour supprimer les doublons
    $tab=array_unique($tab);
    return $tab;
}
?>