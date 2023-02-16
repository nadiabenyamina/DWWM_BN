<?php

class Armes{
    private static $id=1;
    private $identifiant;
    private $degat;
    private $nom;

    public function __construct($degat,$nom){
        // Utiliser self au lieu de nom classe

        // On peut mettre valeur par defaut (si oublie permet de prendre cette valeur par dédfaut)
        $this->identifiant= self::$id++;
        $this->degat=$degat;
        $this->nom=$nom;
    }

    public function getidentifiant(){return $this->identifiant;}
    public function getdegat(){return $this->degat;}
    public function getnom(){return $this->nom;}

    public function setid($identifiant){$this->$identifiant=$identifiant;}
    public function setdegat($degat){$this->degat=$degat;}
    public function setnom($nom){$this->nom=$nom;}
}
// Données armes
$arme1 = new Armes(100,"Kung-Fu");
$arme2 = new Armes(10,"Banane");
$arme3 = new Armes(10,"Doudou");

$armes = [$arme1, $arme2, $arme3];


?>