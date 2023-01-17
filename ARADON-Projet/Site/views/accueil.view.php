<?php ob_start() ?>

<!-- Div contenant toute la page d'accueil -->
<div class="bg-image">
    <!-- Titre de la page -->
    <h1>Bienvenue sur The Last Of Us</h1>
    
    <!-- Texte de la page -->
    <p>
        Vous retrouverez sur ce site toutes les informations concernant les jeux </br>
        de la licence The Last Of Us, créé par le célèbre studio Naughty Dog ! </br>
        Les jeux sont disponible sur Playstation et PC uniquement.
    </p>
</div>



<?php
$content = ob_get_clean();
require "template.php";
?>