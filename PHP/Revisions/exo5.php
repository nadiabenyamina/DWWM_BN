<?php

$nb1 = readline("Votre premier nombre : ");
$nb2 = readline("Votre second nombre : ");

// nb1 plus grand que nb2
if ($nb1 > $nb2){
    echo $nb1 . " est plus grand que " . $nb2;
}
// nb2 plus grand que nb1
elseif ($nb2 > $nb1){
    echo $nb2 . " est plus grand que " . $nb1;
}
// nb1 = nb2
elseif ($nb1 = $nb2){
    echo $nb1 . " et " . $nb2 . " sont égaux.";
}

?>