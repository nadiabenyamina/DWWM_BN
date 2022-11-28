<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-secondary"> POO - Les objets (2)</h1>
</div>

<?php
class Ville
{
    public $name;
    public $departement;
    public $numero;

    public function __construct($name, $departement, $numero)
    {
        $this->name = $name;
        $this->departement = $departement;
        $this->numero = $numero;
    }

    public function affiche()
    {
        echo "La ville " . $this->name . " est dans le département " . $this->departement . " (" . $this->numero . "). <br>";
    }
}

$city1 = new Ville ('Dunkerque', 'Nord', 59);
$city2 = new Ville ('Strasbourg', 'Bas-Rhin', 67);
$city3 = new Ville ('Marseille', 'Bouches-du-Rône', 13);
$city4 = new Ville ('Bordeaux', 'Gironde', 33);
$city5 = new Ville ('Nantes', 'Loire-Atlantique', 44);

$city1->affiche();
$city2->affiche();
$city3->affiche();
$city4->affiche();
$city5->affiche();
?>

<?php
$content = ob_get_clean();
require '../template.php';
?>