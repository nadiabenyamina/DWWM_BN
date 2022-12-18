<?php
// Bonjour Kesary !!!!
// Je n'ai pas réussi à utiliser cette classe. J'ai essayé d'appeler la fonction winorlose() dans la fonction play()
// mais je n'arrivais pas à l'afficher dans le terminal. Comme tu as pu le voir, j'ai tout fait dans la fonction play() à la place
// je laisse quand même la page BanditManchot pour que tu puisse voir comment j'ai essayé de faire mais du coup
// sache que je n'utilise pas du tout cette classe dans tout mon code !
// J'aurais besoin d'une explication pour savoir comment appeler une fonction dans une autre lorsqu'on se reverra à la rentrée
// Bon réveillon à toi et à ta famille et passe de bonnes fêtes de fin d'année !

class BanditManchot
{
    public function winOrLose($character)
    {
        $BanditManchot = rand(1, 2);
        if ($BanditManchot == 1){
            echo "Bandit Manchot : Vous perdez de la vie.\n";
            echo "Nombre de points perdus : " . $character->howManyWeWinOrLose();
            $character->setLifePoint($character->getLifePoint() - $character->howManyWeWinOrLose());
            echo "Point de vie : " . $character->getLifePoint();

            if ($character->getLifePoint() <= 0){
                echo "Point de vie : " . $character->getLifePoint();
                echo "\nGAME OVER. Recommencez !";
            }

        } else {
            echo "Bandit Manchot : Vous gagnez de la vie.\n";
            echo "Nombre de points gagnés : " . $character->howManyWeWinOrLose();
            $character->setLifePoint($character->getLifePoint() + $character->howManyWeWinOrLose());
            echo "Point de vie : " . $character->getLifePoint();
        }
    }

    public function howManyWeWinOrLose()
    {
        $winlose = rand(1, 100);
        echo $winlose;
    }
}
?>