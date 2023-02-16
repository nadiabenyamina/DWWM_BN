<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-warning"> Formulaire méthode GET </h1>
</div>

<form action="exercice4.php" method="get">
    <fieldset>
        <label>Votre pseudo : </label>
        <input type="text" name="pseudo"></input>
    </fieldset>

    <fieldset>
        <label>Votre âge : </label>
        <input type="text" name="age">
    </fieldset>

    <button type="submit" name="submit" class="btn btn-primary">Entrer</button>
</form>

<?php
$pseudo = "";
$age = "";

if (isset($_GET['submit'])) {
    $pseudo = $_GET['pseudo'];
    $age = $_GET['age'];
    echo "Votre pseudo est " . $pseudo . " et vous avez " . $age . ".";
}
?>

<?php
$content = ob_get_clean();
require "../template.php";
?>