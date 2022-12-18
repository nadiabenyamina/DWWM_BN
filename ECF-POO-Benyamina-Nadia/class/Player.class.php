<?php
// entité player qui hérite de la class character
class Player extends Character
{
    // attribut de la class player
    private $score;
    private $pseudo;

    // le __construct avec les attributs des class player et character
    public function __construct(int $score, string $pseudo, int $lifePoint, int $strenghtPoint)
    {
        // parent::__construct() pour éviter d'écrire $this->... pour les attributs de cette class
        parent::__construct($lifePoint, $strenghtPoint);
        $this->score = $score;
        $this->pseudo = $pseudo;
    }

    public function getScore(){return $this->score;}
    public function setScore($score){$this->score = $score;}

    public function getPseudo(){return $this->pseudo;}
    public function setPseudo($pseudo){$this->pseudo = $pseudo;}

    // fonction move() qui regroupe tout mon code
    public function move($character)
    {
        // ici j'affiche le menu puis je crée un readline que j'utiliserais dans le switch
        echo "Saisir '1' pour quitter le jeu.\n";
        echo "Saisir '2' pour vous déplacer vers le Nord.\n";
        echo "Saisir '3' pour vous déplacer vers le Sud.\n";
        echo "Saisir '4' pour vous déplacer vers l'Est.\n";
        echo "Saisir '5' pour vous déplacer vers l'Ouest.\n";
        $story = readline("\nQue souhaitez-vous faire ? ");
        
        // switch qui me permet d'afficher mon jeu seulement si l'utilisateur décide de se déplacer
        switch ($story) {
            case 1:
                echo "Vous avez quitté le jeu.\n";
                break;
            case 2:
                echo "Vous vous déplacez vers le Nord.\n\n";
                break;
            case 3:
                echo "Vous vous déplacez vers le Sud.\n\n";
                break;
            case 4:
                echo "Vous vous déplacez vers l'Est.\n\n";
                break;
            case 5:
                echo "Vous vous déplacez vers l'Ouest.\n\n";
                break;
        }

        // grâce au switch, j'utilise un if pour que si le joueur se déplace et le programme lancera le jeu
        if ($story == 2 or $story == 3 or $story == 4 or $story == 5) {
            // on crée le jeu ici, on commence par créer le rand() pour choisir l'ennemi
            $ennemi = rand(1, 6);

            // si le numéro est 2 ou 5 alors ce sera le bandit manchot
            if ($ennemi == 2 or $ennemi == 5) {
                echo "Vous rencontrez un bandit manchot.\n";
                $jouer = readline("Êtes-vous prêt(e) à jouer avec lui ? (O/N) : ");
                // strtoupper pour forcer la majuscule, comme ça si le joueur entre "O" ou "o", 
                // il sera automatiquement mis en majuscule et le programme lancera le reste du jeu
                $jouer = strtoupper($jouer);

                // donc si le joueur choisi de jouer, on entre dans la fonction play()
                if ($jouer == 'O') {
                    echo "\nVous allez jouer à un jeu de hasard en utilisant vos points de vie.\n";
                    echo "Le Manchot fera 2 tirages, le premier pour savoir si vous gagnez ou perdez de la vie,\n";
                    echo "le second pour ajouter ou retirer un certain nombre de points de vie compris entre 1 et 10.\n";
                    echo "... Que le jeu commence !\n\n";

                    $character->play($character);

                    // après la fonction, on relance la fonction move() pour demander à le joueur s'il veut continuer d'avancer 
                    // ou s'il veut quitter le jeu
                    $character->move($character);
                }
                // si le joueur refuse de jouer, le programme s'arrêtera
                elseif ($jouer == 'N') {
                    echo "Merci d'avoir joué avec nous, à bientôt !\n";
                }
            } else {
                // du coup si le numéro n'est pas 1 ou 5, le joueur rencontrera un monstre
                echo "Vous rencontrez un monstre. Il peut sembler faible au premier regard mais les apparences sont parfois trompeuses !\n\n";
                // monstre que j'instancie ici
                $monster = new Monster(rand(20, 100), rand(5, 10));

                // ici on dit au programme que si le monstre à des pv inférieur ou égal à 20 et supérieur ou égal à 60, 
                // alors on donne 1 point au joueur
                if ($monster->getLifePoint() >= 20 && $monster->getLifePoint() <= 60) {
                    // le set permet de modifier l'information contenu dans l'attribut score, on le récupère avec le getter 
                    // et on le modifie avec le setter
                    $character->setScore($character->getScore() + 1);
                }
                // ici c'est pareil qu'au dessus, sauf que si ses pv sont compris entre 61 et 100 et bien le joueur reçoit 2 points
                elseif ($monster->getLifePoint() >= 61 && $monster->getLifePoint() <= 100) {
                    $character->setScore($character->getScore() + 2);
                }

                // on lance la fonction attack de la class character
                $character->attack($character, $monster);

                // je crée une boucle while pour dire au programme que tant que les pv du monstre sont supérieur à 0,
                // il doit lancer la fonction attack
                while ($monster->getLifePoint() > 0) {
                    $character->attack($character, $monster);

                    // et ici un if, si les pv du monstre sont inférieur ou égal à 0, le joueur a gagné et on affiche son score
                    if ($monster->getLifePoint() <= 0) {
                        echo "Votre score : " . $character->getScore() . "\n\n";
                    }
                    // "enfin si" les pv du joueur sont inférieur ou égal à 0, le programme lui annonce qu'il a perdu et affiche son score
                    elseif ($character->getLifePoint() <= 0) {
                        echo "Vous avez perdu ! Votre score : " . $character->getScore() . "\n\n";
                    }
                    // ici un petit mot d'encouragement qui s'affichera tant que le monstre n'est pas vaincu !
                    else {
                        echo "\nEncore !\n\n";
                    }
                }

                // on relance la fonction move() pour que le joueur puisse jouer autant de fois qu'il le souhaite
                $character->move($character) . "\n";
            }
        } elseif ($story == 1) {
            // et ici si le joueur choisi 1 et bien le jeu s'arrête
            echo "Au revoir !\n";
        }
    }

    // la fonction play() où j'ai créé le jeu du bandit manchot
    public function play($character)
    {
        // le rand() pour que le manchot puisse choisir si le joueur perd ou gagne de la vie
        $BanditManchot = rand(1, 2);
        if ($BanditManchot == 1) {
            echo "Bandit Manchot : Vous perdez de la vie.\n";
            // ici un autre rand() pour savoir combien le joueur perdra de point
            $winlose = rand(1, 100);
            // j'affiche ensuite le nombre de point qu'il perdra
            echo "Nombre de points perdus : " . $winlose . "\n";
            // ici j'affiche le nombre de point qu'il avait AVANT de perdre les points ci-dessus
            echo "Points de vie avant : " . $character->getLifePoint() . "\n";
            // ici le calcul, on récupère les points avec le getter et on soustrait le nombre de point qu'il perdra avec 
            // le rand() de $winlose, le setter pour modifier et sauvegarder le résultat
            $character->setLifePoint($character->getLifePoint() - $winlose) . "\n";
            // et enfin on affiche le nombre de point qu'il lui reste
            echo "Point de vie : " . $character->getLifePoint() . "\n\n";

            // et ici si le joueur n'a plus de pv, il a perdu et doit recommencer le jeu
            if ($character->getLifePoint() <= 0) {
                echo "Point de vie : " . $character->getLifePoint() . "\n";
                echo "\nGAME OVER. Recommencez !\n\n";
            }
        } else {
            // pareil que pour la partie où le joueur perd de la vie sauf qu'ici il va en gagner
            // donc on refait la même chose sauf que l'opération est maintenant une addition et non une soustraction
            echo "Bandit Manchot : Vous gagnez de la vie.\n";
            $winlose = rand(1, 100);
            echo "Nombre de points gagnés : " . $winlose . "\n";
            echo "Points de vie avant : " . $character->getLifePoint() . "\n";
            $character->setLifePoint($character->getLifePoint() + $winlose) . "\n";
            echo "Point de vie après : " . $character->getLifePoint() . "\n\n";
        }
    }
}
