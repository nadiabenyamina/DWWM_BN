<?php ob_start() ?>

<h1 class="title">INSCRIPTION</h1>

<div class="form-inscription">
    <form action="" method="post">
        <div class="rep">
            <label for="pseudo">Pseudo : </label>
            <input type="text">
        </div>    
    
        <div class="rep">
            <label for="mdp">Mot de passe : </label>
            <input type="text">
        </div>

        <div class="rep">
            <label for="confmdp">Confirmation du mot de passe : </label>
            <input type="text">
        </div>

        <div class="rep">
            <label for="email">Adresse e-mail : </label>
            <input type="text">
        </div>

        <div class="rep">
            <label for="confemail">Confirmation de l'adresse e-mail : </label>
            <input type="text">
        </div>

        <div class="btn">
            <input type="submit" value="S'inscrire">
        </div>
    </form>
</div>

<?php
$content = ob_get_clean();
require "template.php";
?>