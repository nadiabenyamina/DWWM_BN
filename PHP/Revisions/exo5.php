<?php

$nb1 = readline("Votre premier nombre : ");
$nb2 = readline("Votre deuxième nombre : ");

// nb1 plus grand que nb2, si le premier nombre est plus grand que le 2è
if ($nb1 > $nb2){
    echo $nb1 . " est plus grand que " . $nb2;
}
// nb2 plus grand que nb1, si on entre un 2è nombre plus grand que le 1er
elseif ($nb2 > $nb1){
    echo $nb2 . " est plus grand que " . $nb1;
}
// nb1 = nb2, si on entre la même valeur dans les 2 saisies
elseif ($nb1 = $nb2){
    echo $nb1 . " et " . $nb2 . " sont égaux.";
}

?>