<?php

echo "Voici un tableau de 10 nombres rempli aléatoirement : " . "\n";

// on commence par créer le tableau principal
$tab1 = array();
// boucle for pour pouvoir le parcourir et afficher 10 nombres aléatoires grâce à la fonction rand()
for ($i=0; $i<=10; $i++){
    $tab1[$i] = rand(20, 100);
    // un echo pour pouvoir l'afficher sur le terminal
    echo $tab1[$i] . " . ";
}

// des sauts de ligne pour aérer le code sur le terminal
echo "\n" . "\n";

// on crée le menu pour que l'utilisateur sache ce qu'il peut faire et le chiffre qu'il doit entrer pour exécuter le programme
echo "MENU : " . "\n";
echo "0. Quitter." . "\n";
echo "1. Trier le tableau en ordre croissant." . "\n";
echo "2. Trier le tableau en ordre décroissant." . "\n";
echo "3. Remplir un troisième tableau en additionnant chaque élément du tableau 1 et 2." . "\n";
echo "4. Inverser le tableau 3." . "\n";

echo "\n";

// la question avec un readline pour pouvoir exécuter le switch par la suite
$question = readline("Que voulez-vous faire avec le tableau ? ");

// on fait un switch avec comme condition la question pour que quand l'utilisateur entrera un chiffre,
// le programme pourra aller dans l'une des cases correspondantes au menu ci-dessus
switch($question){
    case 0 :
        // un simple echo pour confirmer que l'utilisateur a bien quitté le programme
        echo "Au revoir";
    break;

    case 1 :
        // j'utilise sort() pour ranger le tableau dans l'ordre croissant
        sort($tab1);

        // et un foreach pour pouvoir le parcourir et l'afficher
        foreach ($tab1 as $croissant => $value){
            echo "$value" . " . ";
        }
    break;

    case 2 :
        // ici j'utilise rsort() pour ranger le tableau dans l'ordre décroissant
        rsort($tab1);

        // et le foreach pour le parcourir et l'afficher
        foreach ($tab1 as $décroissant => $value){
            echo "$value" . " . ";
        }
    break;

    case 3 :
        // ici il faut additionner tab1 et tab2 dans un 3ème tableau

        // on crée le 2ème tableau, boucle for pour le parcourir et avoir les 10 éléments aléatoires demandés
        $tab2 = array();
        for ($i=0; $i<=10; $i++){
            $tab2[$i] = rand(20, 100);
        }

        echo "Tableau 1 : ";
        // on affiche d'abord le premier tableau avec le foreach pour pouvoir parcourir et l'afficher sur le terminal
        foreach ($tab1 as $addition => $value){
            echo $value . " . ";
        }

        echo "\n" . "Tableau 2 : ";
        // ensuite on affiche le deuxième
        foreach ($tab2 as $addition => $value){
            echo $value . " . ";
        }
        
        echo "\n" . "Résultat du tableau 3 : ";
        // et enfin on crée le 3ème tableau qu'on va pouvoir remplir en additionnant les 2 premiers
        $tab3 = [];
        // on utilise la boucle for pour cette tache, on parcourt les tableaux 1 et 2 avant de les additionner dans $tab3
        for ($i=0; $i<count($tab1); $i++) {
            $tab3[$i] = $tab1[$i] + $tab2[$i];
            // et on affiche enfin le troisième tableau pour voir le résultat
            echo $tab3[$i] . " . ";
        }
    break;

    case 4 :
        // ici on doit inverser le tableau 3 alors je recopie le même code que le case 3
        // je crée le 2ème tableau, j'affiche le tableau 1 et 2 puis je les additionne dans le 3ème que j'affiche aussi
        $tab2 = array();
        for ($i=0; $i<=10; $i++){
            $tab2[$i] = rand(20, 100);
        }

        echo "Tableau 1 : ";
        foreach ($tab1 as $addition => $value){
            echo $value . " . ";
        }

        echo "\n" . "Tableau 2 : ";
        foreach ($tab2 as $addition => $value){
            echo $value . " . ";
        }
        
        echo "\n" . "Résultat du tableau 3 : ";
        $tab3 = [];
        for ($i=0; $i<count($tab1); $i++) {
            $tab3[$i] = $tab1[$i] + $tab2[$i];
            echo $tab3[$i] . " . ";
        }

        // et pour finir j'inverse ce dernier grâce à la fonction array_reverse, qui inversera tous les éléments du tableau
        echo "\n" . "Tableau 3 inversé : ";
        $tab3 = array_reverse($tab3);
        foreach ($tab3 as $reverse => $value){
            // on affiche le résultat avec l'echo
            echo $value . " . ";
        }
    break;
}

?>