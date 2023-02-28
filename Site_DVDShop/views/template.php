<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <!-- Version Bootstrap : 5.2.X -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>DVD SHOP</title>
</head>

<body style="background-color: rgb(75, 75, 75); color: white; width: 100vw;">
  <!-- Barre de navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/views/accueil.view.php">
      <img src="" alt="logo_dvdshop" width="30" height="30">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Films 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Anime</a></li>
            <li><a class="dropdown-item" href="#">Fantastique</a></li>
            <li><a class="dropdown-item" href="#">Horreur</a></li>
            <li><a class="dropdown-item" href="#">Policier</a></li>
            <li><a class="dropdown-item" href="#">Science Fiction</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Tout voir</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Séries 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Anime</a></li>
            <li><a class="dropdown-item" href="#">Fanstatique</a></li>
            <li><a class="dropdown-item" href="#">Horreur</a></li>
            <li><a class="dropdown-item" href="#">Policier</a></li>
            <li><a class="dropdown-item" href="#">Science Fiction</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Tout voir</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 fst-italic" type="search" placeholder="Rechercher un titre..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
      </form>
    </div>
  </div>
</nav>

  <!-- Contenu du dossier view -->
  <div class="content">
    <?= $content ?>
  </div>

  <!-- Footer du site -->
  <footer>
    <div>
      <a href=""></a>
    </div>

    <p>Copyright © 2023 - Tous droits réservés</p>

    <ul>
      <li><a href="<?= URL ?>contact">Contact</a></li>
      <li><a href="<?= URL ?>mentionslegales">Mentions légales</a></li>
    </ul>
  </footer>

  <!-- script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>