<?php
class Sphere extends Cercle
{
    public function __construct($diametre)
    {
        $this->diametre = $diametre;
    }

    public function volume()
    {
        $rayon = $this->diametre / 2;
        $volume = (4 * pi() * $rayon**3) / 3;
        return round($volume, 2);
    }

    public function afficherSphere($sphere)
    {
        echo "Volume : " . $sphere->volume($sphere);
    }
}