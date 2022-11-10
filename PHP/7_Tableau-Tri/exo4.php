<?php

$saisir = readline("Entrez le prénom d'une personne présente dans cette salle : ");
$dictionnaire = ["Walid", "Clément", "Damien", "Frédéric", "Maxime", "Florentin", "Maxence", "Nadia", "Manon", "Lucie", "Bryan", "Thibaut", "Kesary"];

for ($i=0; $i<count($dictionnaire); $i++) {
    sort($dictionnaire);
}

foreach ($dictionnaire as $key => $value) {
    if ($value == $saisir) {
        echo "Votre mot : " . $value . "\n" . "Place n° : " . $key;    
    }
}

?>