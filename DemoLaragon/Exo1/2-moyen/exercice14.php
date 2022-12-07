<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-warning"> Ready Player One </h1>
</div>

<?php
require('class/class_armes.php');
require('class/class_player.php');
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Point de vie</th>
            <th scope="col">Force</th>
            <th scope="col">Arme</th>
            <th scope="col">Dégat de l'arme</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($joueurs); $i++) : ?>
            <tr>
                <th scope="row"> <?= $weapons[$i]->getid() ?> </th>
                <td> <?= $joueurs[$i]->getName() ?> </td>
                <td> <?= $joueurs[$i]->getPv() ?> </td>
                <td> <?= $joueurs[$i]->getForce() ?> </td>
                <td> <?= $weapons[$i]->getNom() ?> </td>
                <td> <?= $weapons[$i]->getDegat() ?> </td>
            </tr>
        <?php endfor ?>
    </tbody>
</table>

<div class="d-flex flex-wrap justify-content-center">
    <div class="card" style="width: 18rem;">
        <img src="/Exo1/2-moyen/img/Mason.png" class="card-img-top" style="height:350px" alt="...">
        
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    
    <div class="card" style="width: 18rem;">
        <img src="/Exo1/2-moyen/img/Dragovich.png" class="card-img-top" style="height:350px" alt="...">
        
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="/Exo1/2-moyen/img/Reznov.png" class="card-img-top" style="height:350px" alt="...">
        
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "../template.php";
?>