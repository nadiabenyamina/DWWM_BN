<?php ob_start() ?>

<!-- Div principale contenant l'image de fond et les textes-->
<div class="bg-image">

    <!-- Titre de la page -->
    <h1>Bienvenue sur The Last Of Us</h1>
    
    <!-- Texte de la page -->
    <p>
        Vous retrouverez sur ce site toutes les informations concernant les jeux </br>
        de la licence The Last Of Us, créé par le célèbre studio Naughty Dog ! </br>
        Les jeux sont disponible sur Playstation et PC uniquement.
    </p>

    <!-- div des textes contenant les liens dirigeants vers les jeux, la série et la bande dessinée -->
    <div class="accueil">
        <div class="jeux">
            <p>Les jeux :</p>
            <div class="games">
                <a href="">
                    <img src="./images/cover-tlou-p1.png" alt="" class="game">
                </a>
                <a href="">
                    <img src="./images/cover-tlou-p2.png" alt="" class="game">
                </a>
            </div>
        </div>
        <div class="serie">
            <p>La série HBO :</p>
            <a href="">
                <img src="./images/tlou-primevideo.jpg" alt="" class="hbo">
            </a>
        </div>
        <div class="bd">
            <p>La BD American Dreams :</p>
            <a href="">
                <img src="./images/americandreams.jpg" alt="" class="ad">
            </a>
        </div>
    </div>
<!-- Fin de la div bg-image -->
</div>

<?php
$content = ob_get_clean();
require "template.php";
?>