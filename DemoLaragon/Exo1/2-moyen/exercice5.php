<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-danger"> POO - Les objets (1)</h1>
</div>

<form action="exercice5.php" method="get">
<button type="submit" name="btn">animaux</button>
</form>

<?php
class Animaux{
    public $nom;
    public $age;
    public $type;

    public function __construct($nom, $age, $type) {
        $this->nom = $nom;
        $this->age = $age;
        $this->type = $type;
    }

    public function affichage(){
        echo "Je suis " . $this->nom . ", j'ai " . $this->age . " ans et je suis un " . $this->type . "." . "<br>";

    }
}

$animaux1 = new Animaux('Caline', 13, 'chat');
$animaux2 = new Animaux('Nala', 2, 'chat');
$animaux3 = new Animaux('Royal', 10, 'chien');
$animaux4 = new Animaux('Kisha', 6, 'chien');

// pour 
$tabAni = [$animaux1, $animaux2, $animaux3, $animaux4];

if (isset($_GET['btn'])) {
    foreach ($tabAni as $value)
        $value->affichage();
}
?>

<p> <?php
// $animaux1->affichage();
// $animaux2->affichage();
// $animaux3->affichage();
// $animaux4->affichage();
?> </p>

<?php
$content = ob_get_clean();
require '../template.php';
?>