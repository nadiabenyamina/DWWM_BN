<?php

class Personnages{
    private $nom;
    private $force;
    private $pv;
    private $idarme;

    public function __construct($nom,$force,$pv){
        $this->nom=$nom;
        $this->force=$force;
        $this->pv=$pv;
        $this->idarme;
    }

    public function getNom(){return $this->nom;}
    public function getforce(){return $this->force;}
    public function getpv(){return $this->pv;}
    public function getidarme(){return $this->idarme;}

    public function setNom($nom){$this->nom=$nom;}
    public function setforce($force){ $this->force=$force;}
    public function setpv($pv){$this->pv=$pv;}
    public function setidarme($idarme){$this->idarme=$idarme;}
}

// Données persos
$perso1 = new Personnages("Nadou",10,100);
$perso2 = new Personnages("Stuart",50,"6k");
$perso3 = new Personnages("Bob",20,"1k");
$perso4 = new Personnages("Kevin",80,"8k");
$persos = [$perso1, $perso2, $perso3, $perso4];

?>