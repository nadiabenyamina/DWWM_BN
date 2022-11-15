<?php
$menu = readline("1. Afficher le nom et les notes de chaque élève.
2. Afficher le nom et la moyenne de chaque élève.
3. Afficher les notes et la moyenne d'un élève dont le nom sera saisi au clavier.
");
$tabNotes = array(
'boucher' => array(16,12,15),
'bourdette' => array(16,10,18),
'jean' => array(16,2,11),
'dupond' => array(16,20,15),
'dupont' => array(16,12,17),
'paul' => array(16,1,15),
);
switch($menu){
    case 1 :
        foreach($tabNotes as $key => $value){
        echo $key . " ";
        foreach($value as $notes ){
            echo $notes . " " ;
        } 
    echo "\n";

} break;
    case 2 :
        foreach($tabNotes as $key => $value){
            echo $key . " ";
    //     foreach($value as $notes ){
    // }
    echo "sa moyenne est de : " . round(array_sum($value) / count($value),2);
    echo "\n";

}break;
    case 3 :
    $nom = readline("Entrez nom de l'élève recherché : ");
    foreach($tabNotes as $key => $value){
        // foreach($value as $notes ){
        // }

    if($nom == $key){
        echo "La moyenne de " . $nom . " est de : " . round(array_sum($value) / count($value),2);
    }

}
break;
}
?>