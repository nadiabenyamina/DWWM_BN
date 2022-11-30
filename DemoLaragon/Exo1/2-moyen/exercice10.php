<?php ob_start() ?>

<!-- les méthodes = dans la class, public function -->
<!-- les fonctions = fonctions -->

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-danger">Stagiaires</h1>
</div>

<?php
class Stagiaire
{
    private $nom;
    private $notes;

    public function __construct(string $nom, array $notes)
    {
        $this->nom = $nom;
        $this->notes = $notes;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNom()
    {
        $this->nom;
    }

    public function setNotes()
    {
        $this->notes;
    }

    // on calcule la moyenne des notes, array_sum pour faire la somme qu'on divise par le nombre de notes avec count
    // on retourne (return) le résultat 
    public function calculerMoyenne()
    {
        $moyenne = array_sum($this->notes)/count($this->notes);
        return $moyenne;
    }

    public function trouverMax()
    {
        $max = max($this->notes);
        return $max;
    }

    public function trouverMin()
    {
        $min = min($this->notes);
        return $min;
    }   
}

// on instancie les stagiaires
$stagiaire1 = new Stagiaire('Nadia', [4, 11, 9, 15, 18]);
$stagiaire2 = new Stagiaire('Mickael', [1, 6, 13, 7, 12]);
$stagiaire3 = new Stagiaire('Noah', [1, 0, 10, 16, 9]);

$tab = [$stagiaire1, $stagiaire2, $stagiaire3];
?>

<div>
    <?php
    foreach ($tab as $value) {
        echo $value->getNom() . " : | ";
        foreach ($value->getNotes() as $notes) {
            echo $notes . " | ";
        }
        echo "<br>";
        // on echo la moyenne puis on entre dans la méthode pour l'afficher "->méthode()"
        echo "Moyenne de cet élève : " . $value->calculerMoyenne() . "/20 <br>";
        echo "Meilleure note de cet élève : " . $value->trouverMax() . "/20 <br>";
        echo "Pire note de cet élève : " . $value->trouverMin() . "/20 <br> <br>";
    }
    ?>
</div>

<?php
$content = ob_get_clean();
require '../template.php';
?>