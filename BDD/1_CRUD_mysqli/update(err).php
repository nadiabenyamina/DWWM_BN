<?php
require_once "config.php";

// définir nos $ et les initialiser
$email = $roles = "";
$email_err = $roles_err = "";

if(isset($_POST['id']) && !empty($_POST['id'])){
    $id = $_POST['id'];

    $email_ok = trim($_POST['email']);

    if(!empty($email_ok)){
        $email_err = "Email incorrect";
    } else {
        $email = $email_ok;
    }

    $roles_ok = trim($_POST['role']);

    if(!empty($roles_admin)){
        $roles_err = "Roles incorrect";
    } else {
        $roles = $roles_admin;
    }

    if(!empty($roles_user)){
        $roles_err = "Roles incorrect";
    } else {
        $roles = $roles_user;
    }

    if(empty($email_err) && empty($roles_err)){
        $sql = "UPDATE users SET email=?, role=? WHERE id=?";

        if($stmt = mysqli_prepare($link, $sql)){
            // respecter l'ordre pour ssi, par exemple si le int ($id_param) était en premier on aurait noté "iss"
            mysqli_stmt_bind_param($stmt, "ssi", $email_param, $roles_param, $id_param);

            $email_param = $email;
            $roles_param = $roles;
            $id_param = $id;

            if(mysqli_stmt_execute($stmt)){
                header("location: index.php");
                exit();
            } else {
                echo "Oops ! Problème de connexion à la BDD, veuillez réessayer ultérieurement.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
} else {
    if(isset($_GET['id']) && !empty(trim($_GET['id']))){
        $id = trim($_GET['id']);
        $sql = "SELECT * FROM users WHERE id=?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $id_param);
            $id_param = $id;

            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result) == 1){
                    $row=mysqli_fetch_array($result);

                    $email = $row["email"];
                    $roles = $row["role"];
                } else {
                    header("location: index.php");
                    exit();
                }
            } else {
                echo "Oops ! Problème de connexion à la BDD, veuillez réessayer ultérieurement.";
            }mysqli_stmt_close($stmt);
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
    <title>Mise à jour</title>
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
                    <h2 class="mt-5">Misa à jour</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" 
                            value="<?php echo $email; ?>"></input> <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Roles</label>
                            <input type="text" name="role" class="form-control <?php echo (!empty($roles_err)) ? 'is-invalid' : ''; ?>"
                            value="<?php echo $roles; ?>"></input> <span class="invalid-feedback"><?php echo $roles_err;?></span>
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