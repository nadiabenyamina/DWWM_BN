<?php
// Include config file
require_once "../php/config.php";
require_once "../php/protection.php";
 
// Define variables and initialize with empty values
$nom = $des = $quan = $prix = $cat = $act = "";
$nom_err = $des_err = $quan_err = $prix_err = $cat_err = $act_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate nom
    $input_nom = protect_montexte($_POST["nom"]);
    if(empty($input_nom)){
        $nom_err = "Entrer un nom valide.";
    } else{
        $nom = $input_nom;
    }
    
    // Validate des
    $input_des = protect_montexte($_POST["des"]);
    if(empty($input_des)){
        $des_err = "Entrer une description correct.";
    } else {
        $des = $input_des;
    }
    
    // Validate quan
    $input_quan = protect_montexte($_POST["quan"]);
    if(empty($input_quan)){
        $quan_err = "Entrer une quantité valide.";     
    } else {
        $quan = $input_quan;
    }

    // Validate prix
    $input_prix = protect_montexte($_POST["prix"]);
    if(empty($input_prix)){
        $prix_err = "Entrer un prix valide.";     
    } else {
        $prix = $input_prix;
    }

    // Validate cat
    $input_cat = protect_montexte($_POST["cat"]);
    if(empty($input_cat)){
        $cat_err = "Entrer une catégorie valide.";     
    } else {
        $cat = $input_cat;
    }

    // Validate act
    $input_act = protect_montexte($_POST["act"]);
    if(empty($input_act)){
        $act_err = "Produit inactif.";     
    } else {
        $act = $input_act;
    }
    
    // Check input errors before inserting in database
    if(empty($nom_err) && empty($des_err) && empty($quan_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO articles (nom, description, quantite, prix, categorie, actif) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssidss", $param_nom, $param_des, $param_quan, $param_prix, $param_cat, $param_act);
            
            // Set parameters
            $param_nom = $nom;
            $param_des = $des;
            $param_quan = $quan;
            $param_prix = $prix;
            $param_cat = $cat;
            $param_act = $act;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2 class="mt-5">Nouvel Utilisateur</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>nom</label>
                            <input type="text" name="nom" class="form-control <?php echo (!empty($nom_err)) ? 'is-invalid' : ''; ?>" 
                            value="<?php echo $nom; ?>">
                            <span class="invalid-feedback"><?php echo $nom_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>description</label>
                            <input name="des" class="form-control <?php echo (!empty($des_err)) ? 'is-invalid' : ''; ?>"
                            value="<?php echo $des; ?>"></input> <span class="invalid-feedback"><?php echo $des_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>quantité</label>
                            <input type="text" name="quan" class="form-control <?php echo (!empty($quan_err)) ? 'is-invalid' : ''; ?>" 
                            value="<?php echo $quan; ?>"> <span class="invalid-feedback"><?php echo $quan_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>prix</label>
                            <input type="text" name="prix" class="form-control <?php echo (!empty($prix_err)) ? 'is-invalid' : ''; ?>" 
                            value="<?php echo $prix; ?>"> <span class="invalid-feedback"><?php echo $prix_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>catégorie</label>
                            <input type="text" name="cat" class="form-control <?php echo (!empty($cat_err)) ? 'is-invalid' : ''; ?>" 
                            value="<?php echo $cat; ?>"> <span class="invalid-feedback"><?php echo $cat_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>actif</label>
                            <input type="text" name="act" class="form-control <?php echo (!empty($act_err)) ? 'is-invalid' : ''; ?>" 
                            value="<?php echo $act; ?>"> <span class="invalid-feedback"><?php echo $act_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Annuler</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>