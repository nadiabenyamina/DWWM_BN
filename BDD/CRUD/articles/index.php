<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
            /* table tr td:last-child{
            width: 120px;
        } */

        .td{
            display:block;
            width: 120px;
        }
    </style>
</head>
<body>
    <h1 class="text-center">Tableau de bord</h1>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2>Articles</h2>
                        <a href="create.php" class="btn btn-success pull-right"> <i class="fa fa-plus"></i>New Article</a>
                    </div>
                    <!-- inclu le fichier de connexion à la bdd  -->
                    <?php
                    require_once '../php/config.php';
                    
                    $sql = "SELECT * FROM articles";

                    // requête classique donc on fait un mysqli_query, on veut récupérer toutes les informations
                    // et non une seule. La requête préparé est dans le read avec le ? et mysqli_prepare
                    // il ira lire la table complète et va chercher tous les enregistrements
                    if($result = mysqli_query($link, $sql)){
                        // $result est comme un tableau avec toutes les lignes de la table, on vérifie le nombre de lignes
                        if(mysqli_num_rows($result)>0){
                            echo '<table class="table table-bordered- table-striped">';
                                echo '<thead>';
                                    echo '<tr>';
                                        echo '<th>ID</th>';
                                        echo '<th>Nom</th>';
                                        echo '<th>Description</th>';
                                        echo '<th>Quantité</th>';
                                        echo '<th>Prix</th>';
                                        echo '<th>Catégorie</th>';
                                        echo '<th>Actif</th>';
                                        echo '<th>Actions</th>';
                                    echo '</tr>';
                                echo '</thead>';

                                echo '<tbody>';
                                    // chaque ligne du tableau $result sera mis dans un tableau associatif
                                    while($row = mysqli_fetch_array($result)){
                                        echo '<tr>';
                                            // bien respecté le nom écrit dans la table créé dans l'index
                                            echo '<td>'. $row["id"] .'</td>';
                                            echo '<td>'. $row["nom"] .'</td>';
                                            echo '<td>'. $row["description"] .'</td>';
                                            echo '<td>'. $row["quantite"] .'</td>';
                                            echo '<td>'. $row["prix"] .'</td>';
                                            echo '<td>'. $row["categorie"] .'</td>';
                                            echo '<td>'. $row["actif"] .'</td>';
                                            echo '<td class="td">';
                                                // ? pour faire un GET dans l'url
                                                echo '<a href="read.php?id='. $row['id'].'" class="mr-2" title="vue" 
                                                data-toggle="tooltip"> <span class="fa fa-eye"></span></a>';
                                                echo '<a href="update.php?id='. $row['id'].'" class="mr-2" title="mise a jour" 
                                                data-toggle="tooltip"> <span class="fa fa-pencil"></span></a>';
                                                echo '<a href="delete.php?id='. $row['id'].'" class="mr-2" title="delete" 
                                                data-toggle="tooltip"> <span class="fa fa-trash"></span></a>';
                                            echo '</td>';
                                        echo '</tr>';
                                    }
                                echo '</tbody>';
                            echo '</table>';
                            // on libère la mémoire
                            mysqli_free_result($result);
                        } else {
                            echo "Oops ! Pas d'enregistrement trouvé, veuillez réessayer ultérieurement.";
                        }
                    } else {
                        echo "Oops ! Problème de connexion à la BDD, veuillez réessayer ultérieurement.";
                    }
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
        <a href="../index.php" class="btn btn-secondary ml-2">Retour à la page d'accueil</a>
    </div>
</body>
</html>