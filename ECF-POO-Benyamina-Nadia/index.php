<?php
// je require fonction.php pour éviter de require toutes les classes, j'économise des lignes de codes
require("./service/fonctions.php");
spl_autoload_register('chargerClasse');

// j'instancie mon joueur
$pseudo = readline("Veuillez entrer votre pseudo : ");
$character = new Player(0, $pseudo, 100, 20);

echo "\n---------- Player '" . $pseudo . "' créé avec succès. ----------\n\n";
echo "Avant de commencer, lisez le menu ci-dessous et choisissez une voie :\n";

// ici j'appelle ma fonction move() de la classe player.php qui s'occupera d'afficher tout le jeu
$character->move($character);

// et enfin j'echo le score total du joueur s'il décide d'arrêter le jeu
echo "Score total : " . $character->getScore() . "\n\n";
?>