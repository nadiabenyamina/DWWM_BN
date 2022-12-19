<?php
// NE JAMAIS FAIRE CONFIANCE A L'UTILISATEUR/CLIENT
// trim nettoie les données, évite les injections

if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    // inclure ma connexion, fichier config sert à se connecter à la base de donnée
    // require once permet de l'appeler qu'une seule fois
    require_once "config.php";

    // préparer ma requête pour récupérer le user en fonction de l'id, ? car on ne sait pas vu qu'on le récupère plus tard
    $sql = "SELECT * FROM users WHERE id = ?";

    // prépare ma connexion : $link et ma requête : $sql, est ce que je suis bien connecté, ma requête est bonne = true
    // autre exemple, le bind peut lier plusieurs infos
    // WHERE id = ? and email = ?
    // mysqli_stmt_bind_param($stmt, "is", $param_id, $param_email);
    if ($stmt = mysqli_prepare($link, $sql)) {
        // i : pour integer, is pour string, ib pour un booléen
        // le bind va lier $param_id au ? de la requête au dessus
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // $param_id remplacera le ?
        $param_id = trim($_GET['id']);

        // à chaque fois qu'on exécute une requête, on test pour savoir si l'information est bien récupéré
        if (mysqli_stmt_execute($stmt)) {
            // récupère le nombre d'enregistrement 
            $result = mysqli_stmt_get_result($stmt);

            // test le nombre de ligne == 1, un id = 1 enregistrement, un id est unique
            // on anticipe l'erreur
            if (mysqli_num_rows($result) == 1) {
                // on récupère le résultat et on crée un tableau associatif
                // ici on récupère $result et on le transforme en tableau associatif (mysqli_assoc)
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                // on peut aussi faire $row = mysqli_fetch_assoc($result);

                $email = $row['email'];
                $mdp = $row['motdepasse'];
            } else {
                // permet d'appeler une page pour rediriger la page s'il y a une erreur
                // on fait revenir l'utilisateur à la page d'accueil par exemple
                header("location: index.php");
                exit();
            }
        } else {
            echo "Oops ! Problème de connexion à la BDD, veuillez réessayer ultérieurement.";
        }
    }
    // vide la mémoire
    mysqli_stmt_close($stmt);
    // déconnexion de la bdd
    mysqli_close($link);
} else {
    header("location: index.php");
    exit();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ (lecture d'un enregistrement)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .wrapper {
            width: 600px;
            margin: 0px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">Lecture</h1>
                    <div class="form-group">
                        <label for="">Email</label>
                        <!-- on appelle le tableau associatif -->
                        <p> <?php echo $row["email"]; ?> </p>
                    </div>
                    <div class="form-group">
                        <label for="">Mot de Passe</label>
                        <p> <?php echo $row["motdepasse"]; ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>