<?php ob_start() ?>

contenu de la page d'accueil

<?php
$content = ob_get_clean();
$titre = "Page d'accueil";
require "template.php";
?>