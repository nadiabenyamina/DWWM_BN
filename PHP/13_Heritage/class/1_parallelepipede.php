<?php
class Parallelepipede extends Rectangle
{
    private $hauteur;

    public function __construct($longueur, $largeur, $hauteur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    public function getHauteur(){return $this->hauteur;}
    public function setHauteur($hauteur){return $this->hauteur = $hauteur;}

    public function volume()
    {
        $volume = $this->longueur * $this->largeur * $this->hauteur;
        return round($volume, 2);
    }

    public function afficherParal($paral)
    {
        echo "Périmètre : " . $paral->perimetre() . " - Volume : " . $paral->volume() . "\n";
    }
}