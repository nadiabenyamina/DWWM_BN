<?php
class Maison
{
    private static $id = 1;
    private $garde;
    private $dateCreation;
    private $nbChambre;
    private $surface;

    public function __construct($dateCreation, $nbChambre, $surface)
    {
        $ajoute=self::$id++;
        $this->garde=$ajoute;

        $this->dateCreation = $dateCreation;
        $this->nbChambre = $nbChambre;
        $this->surface = $surface;
        
    }

    public function getDate()
    {
        return $this->dateCreation;
    }

    public function getChambre()
    {
        return $this->nbChambre;
    }

    public function getSurface()
    {
        return $this->surface;
    }

    public function getidMaison()
    {
        return $this->garde;
    }

    public function setDateCreation($dateCreation)
    {
        return $this->dateCreation = $dateCreation;
    }

    public function setChambre($nbChambre)
    {
        return $this->nbChambre = $nbChambre;
    }

    public function setSurface($surface)
    {
        return $this->surface = $surface;
    }
}

$maison1 = new Maison(2018, 3, 98);
$maison2 = new Maison(2019, 4, 120);
$maison3 = new Maison(2020, 4, 125);
$maison4 = new Maison(2021, 5, 130);

$home = [$maison1, $maison2, $maison3, $maison4];
?>