<?php ob_start() ?>

<h1 class="title">INSCRIPTION</h1>

<?php
$content = ob_get_clean();
require "template.php";
?>