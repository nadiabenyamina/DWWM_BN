<?php
require('class/2_voiture.php');

$voiture1 = new Voiture('Rouge', 'Renault', 'Kadjar', 0, 'Diesel');
$voiture2 = new Voiture('Blanche', 'Citroën', 'C4', 10000, 'Essence');

// $voiture2->setCouleur('Bleu');
// $voiture2->setMarque('Peugeot');
// $voiture2->setModele('206');
// $voiture2->setKilometre(666);
// $voiture2->setMotorisation('Essence');

$cars = [$voiture1, $voiture2];

foreach($cars as $vroom)
{
    echo $vroom->description() . "\n";
}

$question = readline("Voulez-vous rouler avec une voiture ou arreter ? (rk/cc/stop) : ");

if($question == 'rk')
{
    $voiture1->rouler(500) . "\n";
    $voiture1->rouler(41) . "\n";
    foreach($cars as $vroom)
{
    echo $vroom->description() . "\n";
}
}
elseif ($question == 'cc')
{
    $voiture2->rouler(1000) . "\n";
    $voiture2->rouler(666) . "\n";
    foreach($cars as $vroom)
{
    echo $vroom->description() . "\n";
}
}
elseif ($question == 'stop')
{
    echo "Trajet terminé." . "\n";
}
else
{
    echo "error" . "\n";
}