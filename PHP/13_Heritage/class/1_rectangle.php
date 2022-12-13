<?php
class Rectangle
{
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur(){return $this->longueur;}
    public function setLongueur($longueur){$this->longueur = $longueur;}

    public function getLargeur(){return $this->largeur;}
    public function setLargeur($largeur){$this->largeur = $largeur;}

    public function perimetre()
    {
        // retourne le périmètre du rectangle
        $perimetre = ($this->longueur + $this->largeur) * 2;
        return round($perimetre, 2);
    }

    public function aire()
    {
        // retourne l'aire du rectangle
        $aire = $this->longueur * $this->largeur;
        return round($aire, 2);
    }

    public function estCarre()
    {
        // vérifie si le rectangle est un carré
        if ($this->longueur == $this->largeur)
        {
            return "Il s'agit d'un carré.";
        }
        else
        {
            return "Il ne s'agit pas d'un carré.";
        }
    }

    public function afficherRectangle($rectangle)
    {
        echo "Longueur : " . $this->longueur . " - Largeur " . $this->largeur . " - Périmètre : " . $rectangle->perimetre() . 
        " - Aire : " . $rectangle->aire() . " - " . $rectangle->estCarre() . "\n";
    }

// on "return" dans une fonction pour afficher, on "echo" pour afficher dans une fonction affichage par exemple.
// si on "echo" avant un "return", le echo s'affichera en premier (ce qu'on ne veut pas)
}