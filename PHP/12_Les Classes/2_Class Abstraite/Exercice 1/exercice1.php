<?php
require('./class/1_deplacement.php');
require('./class/1_lapin.php');
require('./class/1_chasseur.php');

$lapin = new Lapin("blanc", 4, true);
$chasseur = new Chasseur("Nadou", "fusil");

echo "Le lapin " . $lapin->getCouleur() . " à " . $lapin->getPatte() . " pattes a été créé.\n";
echo $chasseur->getNom() . " la chasseuse a été créé avec un " . $chasseur->getArme() . ".\n";
echo $lapin->seNourir();
echo $chasseur->getNom() . " tire sur lapin avec son " . $chasseur->getArme() . " et le rate.\n";

while($lapin->getenVie() == true)
{
    $chasseur->seDeplacer($chasseur);
    $lapin->crier();
    $lapin->fuir($lapin->seDeplacer($chasseur->getNom()));
    $chasseur->chasser($lapin);
}
?>