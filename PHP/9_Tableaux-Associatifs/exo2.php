<?php

$tabNotes = array("A"=>2, "B"=>14, "C"=>13, "D"=>9, "E"=>8, "F"=>20, "G"=>17, "H"=>7, "I"=>11, "J"=>5);

foreach ($tabNotes as $nom => $note) {
    echo "L'élève " . $nom . " a eu la note de " . $note . "\n";
}

echo "\n";

$moyenne = array_sum($tabNotes)/count($tabNotes);
echo "La moyenne des notes des élèves est de : " . $moyenne;

?>