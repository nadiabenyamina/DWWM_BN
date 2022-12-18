<?php
// ici on crée une class abstraite character
abstract class Character
{
    // comme c'est une class abstraite, les attributs seront en protected
    protected $lifePoint;
    protected $strenghtPoint;

    // on crée le __construct(), les getter et les setter
    public function __construct(int $lifePoint, int $strenghtPoint)
    {
        $this->lifePoint = $lifePoint;
        $this->strenghtPoint = $strenghtPoint;
    }

    public function getLifePoint(){return $this->lifePoint;}
    public function setLifePoint($lifePoint){$this->lifePoint = $lifePoint;}

    public function getStrenghtPoint(){return $this->strenghtPoint;}
    public function setStrenghtPoint($strenghtPoint){$this->strenghtPoint = $strenghtPoint;}

    // ici ma fonction attack() qui s'affichera si le joueur tombe sur un monstre
    public function attack($character, $monster)
    {
        echo "Monstre :\n";
        // on récupère les pv du monstre
        echo "Point de vie actuel : " . $monster->getLifePoint() . "\n";
        // ici on récupère le pseudo et les points de force du joueur
        echo $character->getPseudo() . " attaque le monstre avec " . $character->getStrenghtPoint() . " points de force.\n";
        // ici un setter pour modifier les pv du monstre, on récupère les points de force du joueur qu'on soustrait aux pv du monstre
        $monster->setLifePoint($monster->getLifePoint() - $character->getStrenghtPoint());
        // et on affiche le résultat
        echo "Point de vie actuel : " . $monster->getLifePoint() . "\n\n";

        // ici si les pv du monstre sont supérieur à 0, il attaquera le joueur
        // on fait comme au dessus, on récupère les pv du joueur et les points de force du monstre
        // et on soustrait les points de force du monstre des pv du joueur et on affiche le résultat
        if ($monster->getLifePoint() > 0) {
            echo $character->getPseudo() . " :\n";
            echo "Point de vie actuel : " . $character->getLifePoint() . "\n";
            echo "Le monstre attaque " . $character->getPseudo() . " avec " . $monster->getStrenghtPoint() . " points de force.\n";
            $character->setLifePoint($character->getLifePoint() - $monster->getStrenghtPoint());
            echo "Point de vie actuel : " . $character->getLifePoint() . "\n\n";
        } else {
            // si le monstre est vaincu par le joueur, on affiche cette phrase
            echo "\nBravo, vous avez gagné !\n";
        }
    }
}
?>