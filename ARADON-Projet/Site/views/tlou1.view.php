<?php ob_start() ?>

<h1>THE LAST OF US</h1>

<!-- à relier à la bdd -->

<?php
$content = ob_get_clean();
require "template.php";
?>