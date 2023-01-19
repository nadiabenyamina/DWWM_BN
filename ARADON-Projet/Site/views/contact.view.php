<?php ob_start() ?>

<h1 class="title">Formulaire de contact</h1>

<div class="form-contact">
    <form action="" method="post">
        <div class="rep">
            <label for="name">Nom : </label>
            <input type="text">
        </div>    
    
        <div class="rep">
            <label for="name">Prénom <span>*</span> : </label>
            <input type="text">
        </div>

        <div class="rep">
            <label for="name">Société : </label>
            <input type="text">
        </div>

        <div class="rep">
            <label for="mail">Adresse e-mail <span>*</span> : </label>
            <input type="text">
        </div>

        <div class="rep">
            <label for="msg">Votre message <span>*</span> : </label>
            <input type="text">
        </div>

        <!-- quand le formulaire sera envoyé, les données seront transmises sous
        la forme "send=yes" grâce à "name" et "value" -->
        <div class="accepte">
            <input type="checkbox" name="send" value="yes"></input>
            <label for="msg" class="autorise">J'autorise le site THE LAST OF US à communiquer avec moi</p>
        </div>
        

        <div class="btn">
            <button type="submit">Envoyer</button>
        </div>

        <p class="soumettre">
            En soumettant ce formulaire, vous acceptez que le site THE LAST OF US mémorise et utilise
            vos données personnelles afin de pouvoir vous contacter. L'éditeur du site s'engage à ne
            pas transmettre vos coordonnées à quelconque tiers ni les utiliser pour de la publicité.
        </p>
    </form>
</div>

<?php
$content = ob_get_clean();
require "template.php";
?>