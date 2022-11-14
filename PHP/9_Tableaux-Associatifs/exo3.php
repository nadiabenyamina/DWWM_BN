<?php

$tabNotes = array("Riri" => array(2, 10, 14), "Fifi" => array(10, 18, 12), "Loulou" => array(5, 9, 4),
            "Mickey" => array(20, 16, 11), "Donald" => array(19, 1, 3), "Dingo" => array(15, 13, 7));

foreach($tabNotes as $name => $notes){
    echo "Nom : " . $name . "\n";
    foreach($tabNotes[$name] as $notes){
        echo $notes . "\n";
    }
}

echo "\n";






// $moyenne = array_sum($tabNotes)/count($tabNotes);
// echo "La moyenne des notes des élèves est de : " . $moyenne;
