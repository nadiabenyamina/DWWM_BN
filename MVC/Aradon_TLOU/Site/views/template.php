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
            <a href="<?= URL ?>accueil">Accueil</a>
            <a href="<?= URL ?>naughtydog">Naughty Dog</a>
            <a href="<?= URL ?>jeux">Jeux</a>
            <a href="<?= URL ?>personnages">Personnages</a>
            <a href="<?= URL ?>bd">Bande Dessinée</a>
            <a href="<?= URL ?>serie">Série</a>
        </div>

        <div>
            <a href="<?= URL ?>connexion">Connexion</a>
            <a href="<?= URL ?>inscription">Inscription</a>
        </div>
    </nav>

    <!-- Contenu du dossier view -->
    <div class="content">
        <?= $content ?>
    </div>

    <!-- Footer du site -->
    <footer>
        <div>
            <a href=""></a>
        </div>

        <p>Copyright © 2023 - Tous droits réservés</p>

        <ul>
            <li><a href="<?= URL ?>contact">Contact</a></li>
            <li><a href="<?= URL ?>mentionslegales">Mentions légales</a></li>
        </ul>
    </footer>
</body>

</html>