<?php
class Pyramide extends Triangle
{
    public function __construct($base, $hauteur)
    {
        $this->base = $base;
        $this->hauteur = $hauteur;        
    }

    public function volume()
    {
        $aire = ($this->base * $this->hauteur) / 2;
        $volume = 1/3 * ($aire * $this->hauteur);
        return round($volume, 2);
    }

    public function afficherPyramide($pyra)
    {
        echo "Volume : " . $pyra->volume() . "\n";
    }
}