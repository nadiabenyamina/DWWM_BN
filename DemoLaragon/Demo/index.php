<?php ob_start() ?>

<!-- <h1>Coucou, hello, hola, konnichiwa, nihao, annyeonghasseyo !</h1> -->

<?php

$content = ob_get_clean();
require "template.php";

?>