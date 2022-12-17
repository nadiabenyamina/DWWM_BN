<?php
// Méthodes : crier et seDeplacer
// Attributs : couleur et nombre de pattes

abstract class Animal implements Deplacement
{
    protected $couleur;
    protected $patte;

    public function __construct(string $couleur, int $patte)
    {
        $this->couleur = $couleur;
        $this->patte = $patte;
    }

    public function getCouleur(){return $this->couleur;}
    public function setCouleur($couleur){$this->couleur = $couleur;}

    public function getPatte(){return $this->patte;}
    public function setPatte($patte){$this->patte = $patte;}

    public function crier()
    {
        echo "Le lapin " . $this->couleur . " glapie de peur.\n";
    }

    // fonction de l'interface Deplacement
    public function seDeplacer($chasseur)
    {
        echo $chasseur->getNom() . " tire sur lapin avec son " . $chasseur->getArme() . " et le rate.";       
    }
}