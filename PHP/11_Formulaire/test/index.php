<!DOCTYPE html>
<html class="h-100" lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet"> -->
    <title>Bootstrap</title>
</head>

<body >
    <section id="convertisseur" class="container border border-dark h-50">
        <p class="h3">Convertisseur de devises</p>
    <form>
  <div class="form-group pb-2">
    <label for="Montant">Montant (E)</label>
    <input type="montant" name="montant" class="form-control"  placeholder="Entrez
    le montant">
</div>  
  <div class="form-group pb-2">
    <select class="form-select" aria-label="Default select example" name='devise'>
    <option selected>Convertir en :</option>
    <option value="dollars">Dollar</option>
    <option value="yens">Yen</option>
    <option value="dirhams">Dirham</option>
    </select>
  </div>
  <?php 
  
  if ( isset( $_GET['submit'])) {
    $montant = intval($_GET['montant']);
    $devise = $_GET['devise'];
    $result = convertisseur($montant, $devise);
    
}

function convertisseur($montant, $devise){
    $taux = 0;
    switch($devise){
        case "dollars":
            $taux = 1.0327;
            break;
        case "yens":
            $taux = 145.08;
            break;
        case "dirhams":
            $taux = 11.02;
            break;
        default:
            $taux = 1;
    }
    return round($montant * $taux,2);
}
?>
<div class="form-group pb-2">
<label for="Montant">Resultat</label>
  <input type="text" value="<?php 
  if (isset($result)){
    echo $result . " " . $devise;
  } else {
    echo "";
  }?>">
</div>


  <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
</form>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
</body>

</html>