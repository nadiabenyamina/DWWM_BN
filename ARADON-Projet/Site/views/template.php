<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>The Last Of Us</title>

</head>

<body>
    <!-- Barre de navigation -->
    <nav class="navbar">
        <div class="nav-links">
            <ul class="barre">
                <li><a href="<?=URL?>accueil">Accueil</a></li>
                <li><a href="<?=URL?>naughtydog">Naughty Dog</a></li>
                <li><a href="<?=URL?>jeux">Jeux</a></li>
                <li><a href="<?=URL?>personnages">Personnages</a></li>
                <li><a href="<?=URL?>bd">Bande Dessinée</a></li>
                <li><a href="<?=URL?>serie">Série</a></li>
            </ul>
        </div>
        <div>
            <button><a href="<?=URL?>connexion">Connexion</a> </button>
            <button><a href="<?=URL?>inscription">Inscription</a></button>
        </div>
    </nav>
    <!-- Fin barre navigation -->

    <div class="content">
        <?= $content ?>
    </div>
    
    <footer>
        <p>Copyright © 2023 - Tous droits réservés</p>
        <div>
            <a href=""></a>
        </div>
        <ul>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Mentions légales</a></li>
        </ul>
    </footer>
</body>

</html>