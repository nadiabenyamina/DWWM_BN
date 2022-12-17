<?php
class Triangle
{
    private $base;
    private $hauteur;

    public function __construct($base, $hauteur)
    {
        $this->base = $base;
        $this->hauteur = $hauteur;        
    }
    
    public function getBase(){return $this->base;}
    public function setBase($base){$this->base = $base;}

    public function getHauteur(){return $this->hauteur;}
    public function setHauteur($hauteur){$this->hauteur = $hauteur;}

    public function perimetre()
    {
        // "au carré²" veut dire "x lui même" Nadia
        $hypotenuse = ($this->hauteur**2) + ($this->base**2);
        $perimetre = $this->hauteur + $this->base + $hypotenuse;
        return round($perimetre, 2);
    }

    public function aire()
    {
        $aire = ($this->base * $this->hauteur) / 2;
        return round($aire, 2);
    }

    public function afficherTriangle($triangle)
    {
        echo "Base : " . $this->base . " - Hauteur " . $this->hauteur . " - Périmètre : " . $triangle->perimetre() . 
        " - Aire : " . $triangle->aire() . ".\n";
    }
}
?>