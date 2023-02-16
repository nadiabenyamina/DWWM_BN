<?php ob_start() ?>

<div class="container">
        <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-primary"> Omae wa mou shindeiru!!!</h1>
</div>

<?php
$content = ob_get_clean();
require "../template.php";
?>