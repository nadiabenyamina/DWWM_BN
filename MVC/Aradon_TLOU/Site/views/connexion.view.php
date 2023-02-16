<?php ob_start() ?>

<h1 class="title">CONNEXION</h1>

<div class="form-connexion">
    <form action="" method="post">
        <div class="rep">
            <label for="pseudo">Adresse e-mail : </label>
            <input type="text">
        </div>    
    
        <div class="rep">
            <label for="mdp">Mot de passe : </label>
            <input type="text">
        </div>

        <div class="btn">
            <input type="submit" value="Se connecter">
        </div>
    </form>
</div>

<?php
$content = ob_get_clean();
require "template.php";
?>