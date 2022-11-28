<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
    <title>Démo</title>
</head>

<body>
    <!-- BARRE DE NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="../accueil/index.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Facile</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../1-facile/exercice1.php">Exercice 1</a>
                            <a class="dropdown-item" href="../1-facile/exercice2.php">Exercice 2</a>
                            <a class="dropdown-item" href="../1-facile/exercice3.php">Exercice 3</a>
                            <a class="dropdown-item" href="../1-facile/exercice4.php">Exercice 4</a>
                            <a class="dropdown-item" href="../1-facile/exercice5.php">Exercice 5</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Moyen</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../2-moyen/exercice1.php">Exercice 1</a>
                            <a class="dropdown-item" href="../2-moyen/exercice2.php">Exercice 2</a>
                            <a class="dropdown-item" href="../2-moyen/exercice3.php">Exercice 3</a>
                            <a class="dropdown-item" href="../2-moyen/exercice4.php">Exercice 4</a>
                            <a class="dropdown-item" href="../2-moyen/exercice5.php">Exercice 5</a>
                            <a class="dropdown-item" href="../2-moyen/exercice6.php">Exercice 6</a>
                            <a class="dropdown-item" href="../2-moyen/exercice7.php">Exercice 7</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Difficile</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../3-difficile/exercice1.php">Exercice 1</a>
                            <a class="dropdown-item" href="../3-difficile/exercice2.php">Exercice 2</a>
                            <a class="dropdown-item" href="../3-difficile/exercice3.php">Exercice 3</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Armes</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Exercice 1</a>
                            <a class="dropdown-item" href="#">Exercice 2</a>
                            <a class="dropdown-item" href="#">Exercice 3</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- FIN BARRE DE NAVIGATION -->

    <div class="container">
        <?= $content ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>