<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>The Last Of Us</title>

    <!-- <style>
        .navbar {
            background-color: #3A3026;
        }
    </style> -->
</head>

<body>
    <!-- Barre de navigation -->
    <nav class="navbar">
        <div class="nav-links">
            <ul class="barre">
                <li><a href="#">Accueil</a></li>
                <li><a href="../views/histoire.view.php">Histoire</a></li>
                <li><a href="../views/jeux.view.php">Jeux</a></li>
                <li><a href="../views/personnages.view.php">Personnages</a></li>
                <li><a href="../views/bd.view.php">Bande Dessiné</a></li>
                <li><a href="../views/serie.view.php">Série</a></li>
            </ul>
        </div>
        <div>
            <button>Connexion</button>
            <button>Inscription</button>
        </div>
    </nav>
    <!-- Fin barre navigation -->

    <div>
        <?= $content ?>
    </div>
    
    <footer>
        <p>Copyright © 2023 - Tous droits réservés</p>
        <div>
            <a href=""></a>
        </div>
        <ul>
            <li>CONTACT</li>
            <li>Mentions légales</li>
        </ul>
    </footer>
</body>

</html>