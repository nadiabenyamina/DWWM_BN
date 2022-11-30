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
$book6 = new Livres('Kill la Kill', 'Kana', 'Ryō Akizuki', 2013);
$book7 = new Livres('Fûka', 'Pika', 'Kōji Seo', 2014);

$tabLivres = [$book1, $book2, $book3, $book4, $book5, $book6, $book7];

sort($tabLivres);
?>

<div class="text-center fw-bold fs-4 text-decoration-underline pb-3 pt-3">MES LIVRES :</div>

<!-- foreach pour afficher, echo $book car la méthode toString plus haut, div pour centrer -->
<div class="row text-center justify-content-center">
    <?php
    foreach ($tabLivres as $book) : ?>
    <div class="col-3 border border-dark m-3 p-2">
        <?php echo $book; ?>
    </div>
    <?php endforeach ?>
</div>

<!-- formulaire avec les boutons -->
<form action="exercice12.php" method="post" class="d-flex flex-wrap justify-content-center mt-3 align-item-center">
    <label class="pt-1 fw-bold fs-5">Filtrer par : </label>

    <!-- div contenant les boutons et les if(isset) -->
    <div>
        
        <!-- bouton édition -->
        <div class="btn-group dropup ms-3 mb-3">
            <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" name="btn"> Edition </button>

            <!-- foreach pour afficher seulement les éditions -->
            <div class="dropdown-menu dropdown-menu-center">
                <?php foreach ($tab as $value) : ?>
                    <button class="dropdown-item" type="submit" name="<?= $value->getEdition() ?>"> <?= $value->getEdition() ?> </button>
                <?php endforeach ?>
            </div>
        </div>

        <!-- bouton date -->
        <div class="btn-group dropup ms-3 mb-3">
            <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" name="btn"> Date de parution </button>

            <!-- foreach pour afficher les dates -->
            <div class="dropdown-menu dropdown-menu-center">
                <?php foreach ($tabLivres as $value) : ?>
                    <button class="dropdown-item" type="submit" name="<?= $value->getDate() ?>"> <?= $value->getDate() ?> </button>
                <?php endforeach ?>
            </div>
        </div>

        <div class="fs-5">
            <?php
            foreach ($tabLivres as $value) {
                if (isset($_POST[$value->getEdition()])) {
                    echo $value;
                }
            }

            foreach ($tabLivres as $value) {
                if (isset($_POST[$value->getDate()])) {
                    echo $value;
                }
            }
            ?>
        </div>
    </div>
</form>

<?php
$content = ob_get_clean();
require "../template.php";
?>