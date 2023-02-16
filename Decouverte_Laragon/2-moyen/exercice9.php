<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-warning">MM AUTO</h1>
</div>

<?php
require('fonction.php');

// Entité
class Voiture
{
    // attributs en private
    private $marque;
    private $model;
    private $couleur;
    private $porte;
    private $electrique;

    // constructeur en public
    public function __construct($marque, $model, $couleur, $porte, $electrique)
    {
        $this->marque = $marque;
        $this->model = $model;
        $this->couleur = $couleur;
        $this->porte = $porte;
        $this->electrique = $electrique;
    }

    // fonctions getter pour accéder aux données des attributs
    public function getMarque()
    {
        return $this->marque;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getPorte()
    {
        return $this->porte;
    }

    public function getElec()
    {
        return $this->electrique;
    }

    // fonctions setter pour changer la valeur d'un des attributs
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function setPorte($porte)
    {
        $this->porte = $porte;
    }

    public function setElec($electrique)
    {
        $this->electrique = $electrique;
    }
}

// ajout des différentes voitures  /////// le model est en chaîne de caractère
$voiture1 = new Voiture('Peugeot', '206', 'Blanche', 5, false);
$voiture2 = new Voiture('Renault', 'Clio', 'Vert', 3, false);
$voiture3 = new Voiture('Citroën', 'Ë-C4', 'Rouge', 5, true);
$voiture4 = new Voiture('Kia', 'Niro', 'Bleu', 5, true);
$voiture5 = new Voiture('Suzuku', 'Swift', 'Gris', 5, false);
$voiture6 = new Voiture('Audi', 'TT Coupé', 'Noir', 3, true);

// on les regroupe dans un tableau
$tabCars = [$voiture1, $voiture2, $voiture3, $voiture4, $voiture5, $voiture6];

sort($tabCars);
?>

<!-- container pour ranger le tableau -->
<div class="d-flex flex-wrap justify-content-evenly">
    <!-- qu'on affiche ensuite avec le foreach -->
    <?php foreach ($tabCars as $value) : ?>
        <div>
            <?php
            echo "Marque : " . $value->getMarque() . "<br>";
            echo "Model : " . $value->getModel() . "<br>";
            echo "Couleur : " . $value->getCouleur() . "<br>";
            echo "Portes : " . $value->getPorte() . "<br>";
            echo "Electrique : " . elecVf($value->getElec()) . "<br>";
            ?>
        </div>
    <?php endforeach ?>
</div>

<form action="exercice9.php" method="post" style="width:200px" class="m-auto text-center">
    <!-- menu deroulant -->
    <div class="btn-group dropend pt-5 pb-3">
        <!-- bouton pour afficher les marques de voiture -->
        <button type="button" class="btn btn-primary dropdown-toggle text-center" data-bs-toggle="dropdown" aria-expanded="false" name="btn"> Nos Marques </button>
        <div class="dropdown-menu dropdown-menu-center">
            <?php foreach ($tabCars as $value) : ?>
                <button class="dropdown-item" type="submit" name="<?= $value->getMarque() ?>"> <?= $value->getMarque() ?> </button>
            <?php endforeach ?>
        </div>
    </div>

    <!-- l'affichage des marques sélectionnés -->
    <?php
    foreach ($tabCars as $value) :
        if(isset($_POST[$value->getMarque()])) : ?>
            <div>
                <?php
                echo "Marque : " . $value->getMarque() . "<br>";
                echo "Model : " . $value->getModel() . "<br>";
                echo "Couleur : " . $value->getCouleur() . "<br>";
                echo "Portes : " . $value->getPorte() . "<br>";
                echo "Electrique : " . elecVf($value->getElec()) . "<br>";
                ?>
            </div>
        <?php endif ?>
    <?php endforeach ?>
</form>

<?php
$content = ob_get_clean();
require '../template.php';
?>