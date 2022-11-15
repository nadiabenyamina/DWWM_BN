<?php

$tabNotes = array(["Riri" => array(2, 10, 14)],
                ["Fifi" => array(10, 18, 12)],
                ["Loulou" => array(5, 9, 4)],
                ["Mickey" => array(20, 16, 11)],
                ["Donald" => array(19, 1, 3)],
                ["Dingo" => array(15, 13, 7)]);

$tabNotes = array("Riri" => array(2, 10, 14), "Fifi" => array(10, 18, 12), "Loulou" => array(5, 9, 4),
            "Mickey" => array(20, 16, 11), "Donald" => array(19, 1, 3), "Dingo" => array(15, 13, 7));

$tabNotes = array("Riri" => [2, 10, 14],
                "Fifi" => [10, 18, 12],
                "Loulou" => [5, 9, 4],
                "Mickey" => [20, 16, 11],
                "Donald" => [19, 1, 3],
                "Dingo" => [15, 13, 7]);

$moyenne = array_sum($tabNotes)/count($Riri);
$moyenne = array_sum($tabNotes)/count($Fifi);
$moyenne = array_sum($tabNotes)/count($Loulou);
$moyenne = array_sum($tabNotes)/count($Mickey);
$moyenne = array_sum($tabNotes)/count($Donald);
$moyenne = array_sum($tabNotes)/count($Dingo);

echo "La moyenne des notes des élèves est de : " . $moyenne;







$tabNotes = array("Riri" => array(2, 10, 14), "Fifi" => array(10, 18, 12), "Loulou" => array(5, 9, 4),
            "Mickey" => array(20, 16, 11), "Donald" => array(19, 1, 3), "Dingo" => array(15, 13, 7));
                
foreach($tabNotes as $name => $value) {
    echo $name . "\n";
    foreach($tabNotes[$name] as $notes) {
        echo $notes . "\n";
    }
}

$moyenneRiri = array_sum($tabNotes)/count($tabNotes);
echo "Riri : " . $moyenneRiri;

?>