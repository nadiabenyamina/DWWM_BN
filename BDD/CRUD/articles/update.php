<?php
require_once "../php/config.php";

// définir nos variables et init
$nom = "";
$des= "";
$quan = "";
$prix = "";
$cat = "";
$act = "";
$nom_err = $des_err = $quan = $prix = $cat = $act = "";


if(isset($_POST["id"]) && !empty($_POST["id"])){
    $id = $_POST["id"];

    $nom_ok = trim($_POST["nom"]);

    if(empty($nom_ok)){
        $nom_err = "nom incorrect";
    }else{
        $nom = $nom_ok;
    }

    $des_admin = trim($_POST["des"]);

    if(empty($des_admin)){
        $des_err = "description incorrect";
    }else{   
        $des = $des_admin;
    }

    $quan_admin = trim($_POST["quan"]);

    if(empty($quan_admin)){
        $quan_err = "quantité incorrect";
    }else{
        $quan = $quan_admin;
    }

    $prix_admin = trim($_POST["prix"]);

    if(empty($prix_admin)){
        $prix_err = "prix incorrect";
    }else{
        $prix = $prix_admin;
    }

    $cat_admin = trim($_POST["cat"]);

    if(empty($cat_admin)){
        $cat_err = "catégorie incorrect";
    }else{
        $cat = $cat_admin;
    }

    $act_admin = trim($_POST["act"]);

    if($act_admin != (int)$act_admin){
    // if(!$act_admin){
        $act_err = "actif incorrect";
    }else{
        $act = $act_admin;
    }

    // var_dump($des);die;
    if(empty($nom_err) && empty($des_err) && empty($quan_err) && empty($prix_err) && empty($cat_err) && empty($act_err)){

        // fait appel à la base de donnée, écrire de la même façon
        $sql = "UPDATE articles SET nom=?, description=?, quantite=?, prix=?, categorie=?, actif=? WHERE id=?";

        if($stmt = mysqli_prepare($link,$sql)){
            mysqli_stmt_bind_param($stmt, "ssidssi", $nom_param, $des_param, $quan_param, $prix_param, $cat_param, $act_param, $id_param);
            $nom_param = $nom;
            $des_param = $des;
            $quan_param = $quan;
            $prix_param = $prix;
            $cat_param = $cat;
            $act_param = $act;
            $id_param = $id;

            if(mysqli_stmt_execute($stmt)){
                header("location: index.php");
                exit();
            }else{
                echo "Oups, problème de connexion a la BDD, veuillez réessayer ultérieurement"; 
            }

        }
        // mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}else{

    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        $id = trim($_GET["id"]);

        $sql ="SELECT * FROM articles WHERE id=?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            $param_id = $id;

            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result)==1){
                    $row=mysqli_fetch_array($result);

                    $nom = $row["nom"];
                    $des = $row["description"];
                    $quan = $row['quantite'];
                    $prix = $row['prix'];
                    $cat = $row['categorie'];
                    $act = $row['actif'];
                }else{
                    header("location: index.php");
                    exit();
                }
            }else{
                echo "Oups, problème de connexion a la BDD, veuillez réessayer ultérieurement";
            }
            mysqli_stmt_close($stmt);

        }
        mysqli_close($link);
    } else {
        header("location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mise a jour</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Mise à jour</h2>
                    <p>Veuillez modifier les champs souhaité et valider</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>nom</label>
                            <input type="text" name="nom" class="form-control <?php echo (!empty($nom_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nom; ?>">
                            <span class="invalid-feedback"><?php echo $nom_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>description</label>
                            <input type="text" name="des" class="form-control <?php echo (!empty($des_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $des; ?>">
                            <span class="invalid-feedback"><?php echo $des_err;?></span>                           
                        </div>
                        <div class="form-group">
                            <label>quantité</label>
                            <input type="text" name="quan" class="form-control <?php echo (!empty($quan_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $quan; ?>">
                            <span class="invalid-feedback"><?php echo $quan_err;?></span>                           
                        </div>
                        <div class="form-group">
                            <label>prix</label>
                            <input type="text" name="prix" class="form-control <?php echo (!empty($prix_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $prix; ?>">
                            <span class="invalid-feedback"><?php echo $prix_err;?></span>                           
                        </div>
                        <div class="form-group">
                            <label>catégorie</label>
                            <input type="text" name="cat" class="form-control <?php echo (!empty($cat_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $cat; ?>">
                            <span class="invalid-feedback"><?php echo $cat_err;?></span>                           
                        </div>
                        <div class="form-group">
                            <label>actif</label>
                            <input type="text" name="act" class="form-control <?php echo (!empty($act_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $act; ?>">
                            <span class="invalid-feedback"><?php echo $act_err;?></span>                           
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>