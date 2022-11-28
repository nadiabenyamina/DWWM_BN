<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Convertisseur de monnaie</title>
</head>
<body>
    <h1>Convertisseur de monnaie</h1>

    <!-- Formulaire : balise <form> -->
    <!-- action="" : détermine l'adresse du script qui recevra le contenu du formulaire -->
    <!-- method="" : Valeurs GET (Les variables sont transmises par l'URL, ce qui les rend visibles et modifiables
        très simplement par l'internaute.) ou POST (Les variables sont transmises de manière cachée.) -->
    <form action="convert.php" method="GET">

        <!-- input : permet de "saisir" des informations. La forme que prend cette balise est définie par la propriété "type"-->
        <!-- type="texte" : fait apparaître une boîte de saisie de texte sur la page. -->
        <p>Montant (€) : <input type="text" name="montant" /></p>

        <!-- select : pour faire un menu déroulant avec plusieurs options -->
        <p>Convertir en : 
            <select name="devise">
                <option value="usd">$ US</option>
                <option value="gbp">£ GBP</option>
                <option value="cad">$ CAD</option>
                <option value="jpy">¥ JPY</option>
                <option value="rub">₽ RUB</option>

            </select>
        </p>

        <p>Résultat : <input type="text" name="resultat"></p>

        <!-- Submit : envoi le formulaire -->
        <input type="submit" name="submit" value="Convertir">
        
    </form>

    <?php
    if(isset($_GET["submit"])){
        $montant = $_GET["montant"];
        $devise = $_GET["devise"];

        if($devise == "usd"){
            $result = $montant * 1.02;
            echo "Résultat : " . $result . "$";
        }
        elseif($devise == "gbp"){
            $result = $montant * 0.86;
            echo "Résultat : " . $result . "£";
        }
        elseif($devise == "cad"){
            $result = $montant * 1.37;
            echo "Résultat : " . $result . "$ CAD";
        }
        elseif($devise == "jpy"){
            $result = $montant * 145.56;
            echo "Résultat : " . $result . "¥ JPY";
        }
        elseif($devise == "rub"){
            $result = $montant * 62.35;
            echo "Résultat : " . $result . "₽ RUB";
        }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
    crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" 
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" 
    crossorigin="anonymous"></script>
</body>
</html>