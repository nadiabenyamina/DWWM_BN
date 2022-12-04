<?php
class Armes
{
    private static $id = 1;
    private $idid;
    private $nom;
    private $degat;

    public function __construct($nom, $degat)
    {
        $garde=self::$id++;
        $this->idid=$garde;

        $this->nom = $nom;
        $this->degat = $degat;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDegat()
    {
        return $this->degat;
    }

    public function getid ()
    {
        return $this->idid;
    }

    public function setNom()
    {
        $this->nom;
    }

    public function setDegat()
    {
        $this->degat;
    }

    public function setid ()
    {
        $this->idid;
    }

    // tostring

    // static recuparme qui prend en paramètre l'id puis foreach du tableau d'arme avec un if si id parametre = id arme alors retourne arme
}

$weapon1 = new Armes('Famas', 35);
$weapon2 = new Armes('SPAS-12', 50);
$weapon3 = new Armes('Ballistic Knife', 10);

$weapons = [$weapon1, $weapon2, $weapon3];
?>