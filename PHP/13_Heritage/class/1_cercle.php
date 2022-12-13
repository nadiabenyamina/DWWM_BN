<?php
class Cercle
{
    private $diametre;

    public function __construct($diametre)
    {
        $this->diametre = $diametre;
    }

    public function getDiametre(){return $this->diametre;}
    public function setDiametre($diametre){$this->diametre = $diametre;}

    public function perimetre()
    {
        $rayon = $this->diametre / 2;
        $perimetre = 2 * pi() * $rayon ;
        return round($perimetre, 2);
    }

    public function aire()
    {
        $rayon = $this->diametre / 2;
        $aire = pi() * ($rayon**2);
        return round($aire, 2);
    }

    public function afficherCercle($cercle)
    {
        echo "Diamètre : " . $this->diametre . " - Périmètre : " . $cercle->perimetre() . " - Aire : " . $cercle->aire() . "\n";
    }
}