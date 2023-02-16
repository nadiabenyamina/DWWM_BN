<?php
// require pour pouvoir utiliser la fonction
require_once('15_employe.php');

// extends pour récupérer les attributs de celle-ci
class Cadre extends Employe
{
    protected $listeEmploye;

    // on récupère les infos de la class employe et on ajoute celle du cadre
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
    public function setListeEmploye($listeEmploye){return $this->listeEmploye = $listeEmploye;}

    // boucle pour parcourir la liste des employés qu'on affiche ensuite
    public function manage(){
        echo "Manager de : " ;
        foreach ($this->listeEmploye as $value)
        {
            echo $value . " | ";
        }
        echo "<br> <br>";
    }

    public function augmenteUnSalarie($employe)
    {
        // salaire neymar : 1500.56€, augmentation de 10%
        // salaire odile : 1900.14, augmentation de 20%
        // salaire * (10 / 100)

        if ($employe->getNom()=="Neymar")
        {
        // récupère le salaire de l'employé
        $employe->getSalaire();
        // on injecte dans $salaire
        $salaire = $employe->getSalaire($this->salaire);
        // calcul du pourcentage
        $pourcentage = $salaire * (10 / 100);
        $resultat = $pourcentage + $salaire;
        
        echo "Augmentation de 10% pour " . $employe->getPrenom() . " " . $employe->getNom() . " : " . $resultat . "€.";
        }

        elseif ($employe->getNom()=="Deray")
        {
        $employe->getSalaire();
        $salaire = $employe->getSalaire($this->salaire);
        $pourcentage = $salaire * (20 / 100);
        $resultat = $pourcentage + $salaire;
        
        echo "Augmentation de 20% pour " . $employe->getPrenom() . " " . $employe->getNom() . " : " . $resultat . "€.";
        }
        
        else
        {
            echo "error";
        }
    }
}