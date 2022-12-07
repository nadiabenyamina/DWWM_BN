<?php
require_once('class_employe.php');

class Cadre extends Employe
{
    private $listeEmploye;

    public function __construct(string $nom, string $prenom, string $numSecu, float $salaire, string $job, array $listeEmploye)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->numSecu = $numSecu;
        $this->salaire = $salaire;
        $this->job = $job;
        $this->listeEmploye = $listeEmploye;
    }

    public function getListeEmploye(){return $this->listeEmploye;}
    public function setListeEmploye(){return $this->listeEmploye;}

    public function manage(){
        echo "Manager de : " ;
        foreach ($this->listeEmploye as $value)
        {
            echo $value . " | ";
        }
    }

    public function augmenteUnSalarie(){}

}