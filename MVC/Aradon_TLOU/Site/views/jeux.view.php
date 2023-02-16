<?php ob_start() ?>

<h1 class="title">LES JEUX</h1>

<p class="para">
    The Last Of Us est une série de jeu de survival horror créé par le studio Naughty Dog. Le studio étant un studio
    tiers de Sony, leurs jeux sortent exclusivement sur les consoles Playstation jusqu'en 2022 où Sony décide enfin de sortir
    certaines de ses exclus sur PC, dont la licence The Last Of Us.
    </br></br>
    <a href="<?=URL?>tlou1">The Last Of Us</a> premier du nom est sorti le 14 Juin 2013 sur Playstation 3.</br>
    Le 29 Juillet 2014, le jeu sera remasterisé sur Playstation 4 sous le nom : The Last Of Us Remastered.
    </br></br>
    Après une longue attente, les fans auront enfin la suite tant attendu du jeu le 19 Juin 2020 :
    <a href="<?=URL?>tlou2">The Last Of Us Part II</a>, quelques mois avant la sortie de la Playstation 5.
    Ce jeu a été créé sur le nouveau moteur graphique de Naughty Dog.
    Les graphismes sont plus épurés et le gameplay a été grandement amélioré.
    </br></br>
    En 2022, Sony décide de sortir une nouvelle édition du premier opus, se voulant plus moderne et ainsi relancer les ventes
    des jeux avant la sortie de la nouvelle série de <a href="<?= URL ?>serie">HBO</a> autour du jeu annoncée pour Janvier 2023.
</p>

<?php
$content = ob_get_clean();
require "template.php";
?>