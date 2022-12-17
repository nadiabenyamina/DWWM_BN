<?php
// Attribut : arme
// Méthodes : chasser et seDeplacer
require('1_humain.php');

class Chasseur extends Humain
{
    private $arme;

    public function __construct(string $nom, string $arme)
    {
        parent::__construct($nom);
        $this->arme = $arme;
    }

    public function getArme(){return $this->arme;}
    public function setArme($arme){$this->arme = $arme;}

    // fonction de l'interface Deplacement
    public function seDeplacer($nom)
    {
        echo $this->nom . " avance avec son " . $this->arme . ".\n";
    }

    public function chasser($lapin)
    {
        $chasse = rand(1, 6);
        if ($chasse == 1 or $chasse == 6)
        {
            echo $this->nom . " tire sur le lapin avec son " . $this->arme . " est le touche.\n";
            echo "Le lapin est malheureusement mort.";
            $lapin->setenVie(false);
        }
        else
        {
            echo "Le lapin " . $lapin->getCouleur() . " est en vie et il a pu s'enfuir !\n";
        }
    }
}