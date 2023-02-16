<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-warning"> Tableau de tableaux associatifs </h1>
</div>

<?php
$animaux = [
    array('Nom' => 'Royal', 'Age' => 13, 'Type' => 'Chien'),
    array('Nom' => 'Brutus', 'Age' => 9, 'Type' => 'Chien'),
    array('Nom' => 'Roxane', 'Age' => 8, 'Type' => 'Chien'),
    array('Nom' => 'Kisha', 'Age' => 12, 'Type' => 'Chien'),
    array('Nom' => 'Coquine', 'Age' => 18, 'Type' => 'Chat'),
    array('Nom' => 'Chipie', 'Age' => 17, 'Type' => 'Chat'),
    array('Nom' => 'Chanel', 'Age' => 15, 'Type' => 'Chat'),
    array('Nom' => 'Caline', 'Age' => 13, 'Type' => 'Chat'),
    array('Nom' => 'Nala', 'Age' => 1, 'Type' => 'Chat')
];

require("fonction.php");
?>

<form action="exercice4.php" method="get">
    <button type="submit" name="animaux" class="btn btn-primary">Afficher tous les tableaux</button>
    <button type="submit" name="chien" class="btn btn-primary">Afficher les chiens</button>
    <button type="submit" name="chat" class="btn btn-primary">Afficher les chats</button>
</form>

<div class="row">
    <div class="col"><?php
                        if (isset($_GET['animaux'])) {
                            foreach ($animaux as $index)
                                animaux($index, 'Chien' or 'Chat');
                        } ?></div>

    <div class="col"><?php
                        if (isset($_GET['chien'])) {
                            foreach ($animaux as $index)
                                animaux($index, 'Chien');
                        } ?></div>

    <div class="col">
        <?php
        if (isset($_GET['chat'])) {
            foreach ($animaux as $index)
                animaux($index, 'Chat');
        }
        ?>
    </div>
</div>

<?php
$content = ob_get_clean();
require "../template.php";
?>