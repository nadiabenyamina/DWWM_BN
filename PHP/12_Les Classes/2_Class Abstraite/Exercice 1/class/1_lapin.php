<?php
// - Attribut : enVie
// - Méthode : SeNourrir - fuir - crier - seDeplacer
require('1_animal.php');
class Lapin extends Animal
{
    private $enVie;

    public function __construct(string $couleur, int $patte, bool $enVie)
    {
        parent::__construct($couleur, $patte);
        $this->enVie = $enVie;
    }

    public function getenVie(){return $this->enVie;}
    public function setenVie($enVie){$this->enVie = $enVie;}

    public function seNourir()
    {
        echo "Le lapin mange.\n";
    }
   
    public function fuir()
    {
    }

    public function seDeplacer($lapin)
    {
        echo "Le lapin " . $this->couleur . " s'enfuie sur ses " . $this->patte . " pattes d'un seul bond !\n"; 
    }
}