<?php ob_start() ?>

<h1 class="text-center">Bienvenue sur DVD Shop</h1>
<h2 class="text-center">Louez vos films et vos séries en VOD, DVD et Blu-ray au meilleur prix !</h2>

<!-- Carroussel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="height: 500px;">
    <div class="carousel-item active">
      <img src="public/img/tlou_hbo.jpg" class="d-block w-80 m-auto" alt="tlou_hbo">
    </div>
    <div class="carousel-item">
      <img src="public/img/uncharted_movie.jpg" class="d-block w-80 m-auto" alt="uncharted_movie">
    </div>
    <div class="carousel-item">
      <img src="public/img/alerterouge-movie.png" class="d-block w-80 m-auto" alt="redalert_movie">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="films">
    <p>Nos films</p>
</div>

<div class="series">
    <p>Nos séries</p>
</div>

<div class="reco">
    <p>Nos recommandations</p>
</div>

<?php
$content = ob_get_clean();
require "template.php";
?>