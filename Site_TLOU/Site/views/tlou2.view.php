<?php ob_start() ?>

<h1 class="title">THE LAST OF US PART II</h1>

<!-- à relier à la bdd -->

<?php
$content = ob_get_clean();
require "template.php";
?>