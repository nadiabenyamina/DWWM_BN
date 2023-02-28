<?php ob_start() ?>

contenu de la page histoire

<?php
$content = ob_get_clean();
require "template.php";
?>