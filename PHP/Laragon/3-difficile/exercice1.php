<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-secondary"> Calculatrice </h1>
</div>

<!-- div principale contenant la calcultrice -->
<div class="principale">
    <!-- div pour afficher le résultat -->
    <div class="resultat">
        <form action="exercice2.php" method="post">
            <input type="text" name="">
        </form>
    </div>

</div>

<?php
$content = ob_get_clean();
require "../template.php";
?>