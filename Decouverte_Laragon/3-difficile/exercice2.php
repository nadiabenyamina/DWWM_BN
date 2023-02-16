<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-success"> Page d'authentification </h1>
</div>

<div class="authentification">
    <fieldset>
        <label>Indentifiant : </label>
        <input type="text" name=""></input>
    </fieldset>

    <fieldset>
        <label>Mot de passe : </label>
        <input type="text" name=""></input>
    </fieldset>
</div>

<form action="exercice2.php" method="post"></form>
<?php
$content = ob_get_clean();
require "../template.php";
?>