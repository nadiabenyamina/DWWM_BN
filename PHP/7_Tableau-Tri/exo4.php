<?php
// $saisir = readline("Entrez le prénom d'une personne présente dans cette salle : ");
// $dictionnaire = ["Walid", "Clément", "Damien", "Fred", "Maxime", "Florentin", "Maxence", "Nadia", "Manon", "Lucie", "Bryan", "Thibault", "Kesary"];

$saisir = readline("Animal : ");
$dictionnaire = ["Lapin", "Chien", "Hamster", "Chat"];

for ($i=0; $i<count($dictionnaire); $i++) {
    sort($dictionnaire);
}

foreach ($dictionnaire as $key => $value) {
    echo $key . " : " . $value . "\n";
}

echo "Votre mot : " . $saisir . "\n" . "Place n° : " . $key;