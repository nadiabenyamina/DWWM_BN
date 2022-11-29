<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-info">Animaux(2)</h1>
</div>

<form action="exercice8.php" method="GET">
    <button type="submit" name="btnAnimal">animaux</button>
    <button type="submit" name="btnChien">chiens</button>
    <button type="submit" name="btnChat">chats</button>
</form>

<?php
// on appelle le fichier fonction
require ('fonction.php');

// entité
class Animaux
{
    // attributs en private
    private $nom;
    private $age;
    private $type;

    // constructeur avec la fonction __construct
    public function __construct($nom, $age, $type)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->type = $type;
    }

    // fonctions getter pour accéder aux données des attributs
    public function getNom()
    {
        return $this->nom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getType()
    {
        return $this->type;
    }

    // fonctions setter pour changer la valeur d'un des attributs
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setType($type)
    {
        echo $this->type = $type;
    }
}

// création des animaux
$animaux1 = new Animaux('Caline', 13, true);
$animaux2 = new Animaux('Nala', 2, true);
$animaux3 = new Animaux('Royal', 10, false);
$animaux4 = new Animaux('Kisha', 6, false);

// on regroupe les animaux dans un tableau
$tabAnimal = [$animaux1, $animaux2, $animaux3, $animaux4];

// if(isset) pour dire au bouton de parcourir et d'afficher le tableau quand on clique dessus
if (isset($_GET['btnAnimal'])) {
    foreach ($tabAnimal as $value) {
        echo "Nom : " . $value->getNom() . "<br>";
        echo "Âge : " . $value->getAge() . "<br>";
        echo "Type : " . vraiFaux($value->getType()) . "<br>";
        echo "<br>";
    }   
}

// on déclare la var $type en lui attribuant la valeur 'chien'
if(isset($_GET['btnChien'])) {
    foreach ($tabAnimal as $value) {
        $type = false;
        if ($value->getType() === $type) {
            echo "Nom : " . $value->getNom() . "<br>";
            echo "Âge : " . $value->getAge() . "<br>";
            echo "Type : " . vraiFaux($value->getType()) . "<br>";
            echo "<br>";
        }
    }
}

// ici on lui attribut la valeur 'chat'
if(isset($_GET['btnChat'])) {
    foreach ($tabAnimal as $value) {
        $type = true;
        if ($value->getType() === $type) {
            echo "Nom : " . $value->getNom() . "<br>";
            echo "Âge : " . $value->getAge() . "<br>";
            echo "Type : " . vraiFaux($value->getType()) . "<br>";
            echo "<br>";
        }
    }
}
?>

<?php
$content = ob_get_clean();
require '../template.php';
?>