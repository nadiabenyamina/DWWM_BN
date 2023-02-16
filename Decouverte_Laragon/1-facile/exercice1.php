<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-secondary"> Calculer le carré d'un nombre </h1>
</div>

<?php
if (isset($_POST['submit'])) {
    $nombre = intval($_POST['nombre']);
    $carre = calcul($nombre);
}

function calcul($nombre)
{
    $result = $nombre * $nombre;
    return $result;
}
?>

<form action="exercice1.php" method="post">
    <!-- Fieldset : regroupe plusieurs contrôles interactifs ainsi que des étiquettes (<label>) dans le formulaire. -->
    <fieldset>
        <label>Votre nombre :</label>
        <input type="text" name="nombre" value="<?php
                                                if (isset($_POST['nombre'])) {
                                                    echo $nombre;
                                                } else {
                                                    echo "";
                                                }
                                                ?>" /></input>
    </fieldset>

    <fieldset>
        <label>Résultat :</label>
        <input type="text" value="<?php
                                    if (isset($carre)) {
                                        echo $carre;
                                    } ?>">
        </input>
    </fieldset>

    <button type="submit" name="submit" class="btn btn-primary">Calculer</button>

</form>

<?php
$content = ob_get_clean();
require "../template.php";
?>