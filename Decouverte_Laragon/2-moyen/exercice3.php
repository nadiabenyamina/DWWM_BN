<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-info"> Tableau de tableaux associatifs </h1>
</div>

<?php
require ("fonction.php");

echo "Tableau : ";
$nbTab = [22, 1, 97, 2, 7, 8, 3, 71, 41, 14];

afficherTableau($nbTab);
echo " | " . "<br>";
calculerMoyenne($nbTab);
echo "<br>";

echo "Votre tableau contient que des valeurs pairs : ";
if(estTableauPair($nbTab) == true){
    echo " Vrai" . "<br>";
}
else {
    echo " Faux" . "<br>";
}
?>

<?php
$content = ob_get_clean();
require "../template.php";
?>