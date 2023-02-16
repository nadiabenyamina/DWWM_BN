<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-secondary"> Constante </h1>
</div>

<?php
require ('fonction.php');

class Personnage
{
    private $nom;
    private $age;
    private $sexe;

    const HOMME = true;
    const FEMME = false;

    public function __construct($nom, $age, $sexe)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }
}

// instancie les persos
$perso1 = new Personnage('Marge', 39, Personnage::FEMME);
$perso2 = new Personnage('Homer', 39, Personnage::HOMME);
$perso3 = new Personnage('Lisa', 8, Personnage::FEMME);
$perso4 = new Personnage('Bart', 10, Personnage::HOMME);
$perso5 = new Personnage('Maggie', 1, Personnage::FEMME);

$tabPerso = [$perso1, $perso2, $perso3, $perso4, $perso5];
?>

<div class="d-flex flex-wrap justify-content-evenly">
    <!-- qu'on affiche ensuite avec le foreach -->
    <?php foreach ($tabPerso as $value) : ?>
        <div>
            <?php
            echo "Nom : " . $value->getNom() . "<br>";
            echo "Âge : " . $value->getAge() . "<br>";
            echo "Sexe : " . woMan($value->getSexe()) . "<br>";
            ?>
        </div>
    <?php endforeach ?>
</div>

<?php
$content = ob_get_clean();
require "../template.php";
?>