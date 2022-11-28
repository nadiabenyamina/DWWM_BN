<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-secondary"> Tableau associatif </h1>
</div>

<?php
require("fonction.php");

$tab1 = array('Nom'=>'Marie', 'Age'=>30, 'Sexe'=>'Femme');
$tab2 = array('Nom'=>'Pierre', 'Age'=>32, 'Sexe'=>'Homme');

affiche($tab1);
affiche($tab2);
?>

<!-- <form action="exercice1.php" method="post">
    <fieldset>
        <label>Nom : </label>
        <input type="text" name="Nom"></input>
    </fieldset>

    <fieldset>
        <label>Age : </label>
        <input type="text" name="Age">
    </fieldset>

    <fieldset>
        <label>Nom : </label>
        <input type="text" name="nom"></input>
    </fieldset>

    <button type="submit" name="submit" class="btn btn-primary">Entrer</button>
</form> -->
<!-- $pseudo = "";
$age = "";

if (isset($_GET['submit'])) {
    $pseudo = $_GET['pseudo'];
    $age = $_GET['age'];
    echo "Votre pseudo est " . $pseudo . " et vous avez " . $age . ".";
} -->

<?php
$content = ob_get_clean();
require "../template.php";
?>