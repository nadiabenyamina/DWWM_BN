<?php ob_start() ?>

<h1 class="title">LES JEUX</h1>

<p class="para">
    The Last Of Us est une série de jeu de survival horror où l'on suit l'histoire de deux personnes : 
    <a href="<?= URL ?>personnages">Joël et Ellie</a>.
    </br></br>
    <a href="<?=URL?>tlou1">The Last Of Us</a> premier du nom est sorti le 14 Juin 2013 en exclusivité sur Playstation 3.</br>
    Le 29 Juillet 2014, le jeu sera remasterisé sur Playstation 4 sous le nom : The Last Of Us Remastered.
    </br></br>
    Dans le premier opus, l'histoire commence en 2013 dans la maison de Joël. C'est son annivers Sarah, fille unique de Joël agée
    de seulement 12 ans. Sarah se réveille en pleine nuit, découvrons qu'une épidémie s'est déclarée aux États-Unis dans la ville
    de Joël. Joël qui, au moment
    </br></br>
    Après une longue attente, les fans auront enfin la suite tant attendu du jeu le 19 Juin 2020 : <a href="">The Last Of Us Part II</a>,
    quelques mois avant la sortie de la Playstation 5. Ce jeu a été créé sur le nouveau moteur graphique de Naughty Dog.
    Les graphismes sont plus épurés et le gameplay a été grandement amélioré.
    </br></br>
    En 2022, Sony décide de sortir une nouvelle édition du premier opus, se voulant plus moderne et aussi pour relancer les ventes
    des jeux avant la sortie de la nouvelle série de <a href="<?= URL ?>serie">HBO</a> autour du jeu.
</p>

<?php
$content = ob_get_clean();
require "template.php";
?>