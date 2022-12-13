<?php
class Voiture
{
    private $couleur;
    private $marque;
    private $modele;
    private $kilometre;
    private $motorisation;
    // Diesel ou Essence

    public function __construct($couleur, $marque, $modele, $kilometre, $motorisation)
    {
        $this->couleur = $couleur;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometre = $kilometre;
        $this->motorisation = $motorisation;
    }

    // accesseurs = getter, mutateurs = setter
    public function getCouleur(){return $this->couleur;}
    public function setCouleur($couleur){$this->couleur = $couleur;}

    public function getMarque(){return $this->marque;}
    public function setMarque($marque){$this->marque = $marque;}

    public function getModele(){return $this->modele;}
    public function setModele($modele){$this->modele = $modele;}

    public function getKilometre(){return $this->kilometre;}
    public function setKilometre($kilometre){$this->kilometre = $kilometre;}

    public function getMotorisation(){return $this->motorisation;}
    public function setMotorisation($motorisation){$this->motorisation = $motorisation;}

    public function description()
    {
        return "Cette voiture est un " . $this->modele . " de la marque " . $this->marque . ", de couleur " . $this->couleur . 
        ", de motorisation " . $this->motorisation . ", avec " . $this->kilometre . " Kilomètres.";
    }

    // mettre en paramètre : (.....)
    // public function rouler($newKM, $voiture)
    // {
    //     $trajet =  $this->kilometre + $newKM;
    //     $voiture->setKilometre($trajet);
    // }

    public function rouler($newKM)
    {
        $this->kilometre = $this->kilometre + $newKM;
        return $this->kilometre;
    }
}
?>