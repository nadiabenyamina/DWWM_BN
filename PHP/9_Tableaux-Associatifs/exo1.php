<?php

$chomage = array('Autriche'=>4.9, 'Allemagne'=>9.3, 'Danemark'=>4.8 , 'Espagne'=>9.4, 'France'=>9.7);
$tauxmin = 100;

foreach ($chomage as $pays=>$value) {
    echo "Le taux de chômage en/au " . $pays . " est de : " . $value . " %." . "\n";
    if ($value < 5) {
        echo "Ce pays a un taux de chômage inférieur à 5%." . "\n";
        echo "\n";
    } else {
        echo "Ce pays a un taux de chômage supérieur à 5%." . "\n";
        echo "\n";
    }
}

foreach ($chomage as $pays=>$value) {
    if ($value < $tauxmin) {
        $tauxmin = $value;
        $paysmin = $pays;
    }
}

echo "Le pays avec le taux de chômage le plus bas est : " . $paysmin . " avec un taux de " . $tauxmin . "%.";

?>