<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-info"> Librairie de Nadou </h1>
</div>

<?php
require('fonction.php');

class Livres
{
    private $titre;
    private $edition;
    private $auteur;
    private $date;

    public function __construct($titre, $edition, $auteur, $date)
    {
        $this->titre = $titre;
        $this->edition = $edition;
        $this->auteur = $auteur;
        $this->date = $date;
    }

    function __toString()
    {
        return "Titre : " . $this->titre . "<br> Édition : " . $this->edition . "<br> Auteur : " . $this->auteur . "<br> Date de parution : " . $this->date . "<br> <br>";
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getEdition()
    {
        return $this->edition;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setTitre()
    {
        return $this->titre;
    }

    public function setEdition()
    {
        return $this->edition;
    }

    public function setAuteur()
    {
        return $this->auteur;
    }

    public function setDate()
    {
        return $this->date;
    }
}

$book1 = new Livres('Naruto', 'Kana', 'Masashi Kishimoto', 2002);
$book2 = new Livres('A Certain Scientific Railgun', 'Noeve-Grafx', 'Kazuma Kamachi', 2021);
$book3 = new Livres('Hokuto no Ken', 'Kazé', 'Tetsuo Hara', 2008);
$book4 = new Livres('Dragon Quest - Fly', 'Delcourt/Tonkam', 'Riku Sanjō', 2022);
$book5 = new Livres('The Promised Neverland', 'Kazé', 'Kaiu Shirai', 2016);
$book6 = new Livres('Kill la Kill', 'Kana', 'Ryō Akizuki', 2015);
$book7 = new Livres('Fûka', 'Pika', 'Kōji Seo', 2017);
$book8 = new Livres('Shaman King', 'Kana', 'Takei Hiroyuki', 2020);

$tabLivres = [$book1, $book2, $book3, $book4, $book5, $book6, $book7, $book8];

sort($tabLivres);

$test = doublons($tabLivres);
$test2 = doublon($tabLivres);
?>

<div class="text-center fw-bold fs-4 text-decoration-underline pb-3 pt-3">MES LIVRES :</div>

<!-- formulaire avec les boutons -->
<form action="exercice12bis.php" method="post" class="d-flex flex-wrap justify-content-center mt-3 align-item-center">
    <label class="pt-1 fw-bold fs-5">Filtrer par : </label>

    <!-- div contenant les boutons et les if(isset) -->
    <div>
        <!-- bouton édition -->
        <div class="btn-group dropdown ms-3 mb-3">
            <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" name="btn"> Édition </button>

            <!-- foreach pour afficher seulement les éditions -->
            <div class="dropdown-menu dropdown-menu-center">
                <?php foreach ($test as $value) : ?>
                    <button class="dropdown-item" type="submit" name="<?= $value ?>"> <?= $value ?> </button>
                <?php endforeach ?>
            </div>
        </div>

        <!-- bouton date -->
        <div class="btn-group dropdown ms-3 mb-3">
            <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" name="btn"> Date de parution </button>

            <!-- foreach pour afficher les dates -->
            <div class="dropdown-menu dropdown-menu-center">
                <?php foreach ($test2 as $value) : ?>
                    <button class="dropdown-item" type="submit" name="<?= $value ?>"> <?= $value ?> </button>
                <?php endforeach ?>
            </div>
        </div>

        <!-- bouton tout afficher -->
        <div class="btn-group dropdown ms-3 mb-3">
            <button type="button" class="btn btn-dark" name="btn"> Tout afficher </button>
        </div>

        <!-- if(isset) des boutons Édition et Date de parution -->
        <div class="fs-5">
            <?php
            foreach ($test as $value) :
                if (isset($_POST[$value])) : ?>
                    <div class="d-flex flex-wrap justify-content-center">
                    <?php
                    $tabImg = ['railgun-tome1', 'Dragon-Quest-The-Adventure-of-Dai', 'fukatome1', 'Hokuto-No-Ken-nouvelle-edition',
                    'Kill-la-kill', 'Naruto-Tome-1-avec-Sticker-euro', 'Shaman-King-Star-Edition', 'The-Promised-Neverland'];
                    for ($i=0; $i<count($tabLivres); $i++) : ?>
                        <div class="card m-2" style="width: 18rem;">
                            <img class="card-img-top" src="/Exo1/2-moyen/img/<?= $tabImg[$i]?>.png" alt="<?= $tabImg[$i]?>">

                            <div class="card-body">
                                <h5 class="card-title"><?= $tabLivres[$i]->getTitre() ?></h5>
                                <p class="card-text">Édition : <?= $tabLivres[$i]->getEdition() ?> <br> Auteur : <?= $tabLivres[$i]->getAuteur() ?> 
                                <br> Date de parution : <?= $tabLivres[$i]->getDate() ?></p>
                            </div>
                        </div>
                    <?php endfor ?>
                    </div>;
                <?php endif;
            endforeach; ?>
        </div>
</form>

<!-- container des cards -->


<?php
$content = ob_get_clean();
require "../template.php";
?>