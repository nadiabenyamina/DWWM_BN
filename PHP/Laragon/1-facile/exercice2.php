<?php ob_start() ?>

<div class="container">
        <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-success"> Homme ou Femme </h1>
</div>

<form action="exercice2.php" method="post">
    <fieldset>
        <label>Votre nom : </label>
        <input type="text" name="name"/>></input>
    </fieldset>

    <fieldset>
        <label>Votre âge : </label>
        <input type="text" name="age"/>></input>
    </fieldset>

    <fieldset>
        <label>Votre sexe : </label>
        <input type="text" name="sexe"/>></input>
    </fieldset>

    <button type="submit" name="submit" class="btn btn-primary">Entrer</button>
</form>

<?php
$name = "";
$age = "";
$sexe = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];
    $name = ucfirst($_POST['name']);
    $sexe = ucfirst($_POST['sexe']);
    
    if ($sexe == "Homme"){
        echo $name . " a " . $age . " ans et c'est un homme.";
    }
    elseif ($sexe == "Femme") {
        echo $name . " a " . $age . " ans et c'est une femme.";
    }
    else {
        echo "";
    }
}
?>

<?php
$content = ob_get_clean();
require "../template.php";
?>