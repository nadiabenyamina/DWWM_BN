<?php
// Include config file
require_once "../php/config.php";
require_once "../php/protection.php";
 
// Define variables and initialize with empty values
$email = $mdp = $roles = "";
$email_err = $mdp_err = $roles_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate email
    $input_email = protect_montexte($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Entrer un email valide.";
    } else{
        $email = $input_email;
    }
    
    // Validate mdp
    $input_mdp = protect_montexte($_POST["mdp"]);
    if(empty($input_mdp)){
        $mdp_err = "Entrer un mot de passe correct.";
    } else {
        $mdp = $input_mdp;
    }
    
    // Validate roles
    $input_roles = protect_montexte($_POST["roles"]);
    if(empty($input_roles)){
        $roles_err = "Entrer un role valide.";     
    } else {
        $roles = $input_roles;
    }
    
    // Check input errors before inserting in database
    if(empty($email_err) && empty($mdp_err) && empty($roles_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO users (email, motdepasse, roles) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_email, $param_mdp, $param_roles);
            
            // Set parameters
            $param_email = $email;
            $param_mdp = $mdp;
            $param_roles = $roles;
            
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
                            <label>Email</label>
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" 
                            value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input name="mdp" class="form-control <?php echo (!empty($mdp_err)) ? 'is-invalid' : ''; ?>"
                            value="<?php echo $mdp; ?>"></input> <span class="invalid-feedback"><?php echo $mdp_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Roles</label>
                            <input type="text" name="roles" class="form-control <?php echo (!empty($roles_err)) ? 'is-invalid' : ''; ?>" 
                            value="<?php echo $roles; ?>"> <span class="invalid-feedback"><?php echo $roles_err;?></span>
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