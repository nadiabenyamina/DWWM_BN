<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-light bg-danger"> Formulaire méthode POST </h1>
</div>

<form action="exercice5.php" method="post">
    <fieldset>
        <label>Saisissez un chiffre : </label>
        <input type="text" name="nombre"></input>
    </fieldset>
</form>

<?php
$nombre = "0";

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    
    if($nombre%2 == 0){
        echo $nombre . " est un nombre pair.";
    }
    else {
        echo $nombre . " est un nombre impair.";
    }
}
?>

<?php
$content = ob_get_clean();
require "../template.php";
?>