<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-success">Employés d'AMAZON</h1>
</div>

<?php
// entité class employé
class Employe
{
  // attribut $var
    public $name;
    public $prenom;
    public $adresse;
    public $ville;
    public $tel;

    // le constructeur avec la function construct
    public function __construct($name, $prenom, $adresse, $ville, $tel)
    {
      // affectation de this aux attributs de l'entité Employé
        $this->name = $name;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->tel = $tel;
    }

    // fonction pour afficher les this
    public function affiche()
    {
        echo "Nom : " . $this->name . " / " . "Prénom : " . $this->prenom . " / " . "Adresse : " . 
        $this->adresse . " / " . "Ville : " . $this->ville . " / " . "N° de tel : " . $this->tel . " / " . "<br>";
    }

    // les autres fonctions pour afficher spécifiquement le nom, le prénom, l'adresse, la ville et le numéro de téléphone
    public function affName()
    {
      echo $this->name;
    }

    public function affPrenom()
    {
      echo $this->prenom;
    }

    public function affAdd()
    {
      echo $this->adresse;
    }

    public function affVille()
    {
      echo $this->ville;
    }

    public function affTel()
    {
      echo $this->tel;
    }
}

// création des nouveaux employés
$employe1 = new Employe('Parker', 'Peter', '1290 Avenue of the Americas', 'New York', '06.22.01.41.59');
$employe2 = new Employe('Simpson', 'Bart', '742 Evergreen Terrace', 'Springfield', '06.11.22.33.44');
$employe3 = new Employe('Danvers', 'Kara', '2900 West Alameda Avenue', 'California', '06.55.66.77.88');
$employe4 = new Employe('Uzumaki', 'Naruto', 'Chiyoda-City', 'Tokyo', '06.99.11.12.13');
$employe4 = new Employe('Holmes', 'Sherlock', '221B Baker Street', 'London', '06.14.15.16.17');
$employe5 = new Employe('Whibley', 'Deryck', 'Van Nuys', 'California', '06.18.19.20.21');

// tableau pour regrouper tous les employés
$employes = [$employe1, $employe2, $employe3, $employe4, $employe5];

// foreach pour parcourir le tableau $employes et $value pour afficher les informations
foreach ($employes as $value){
    $value->affiche();
}

// fonction sort pour ranger dans l'ordre alphabétique les employés (ici par leur nom)
sort($employes);

?>

<!-- tableau bootsrap -->
<table class="table">
  <thead class="thead-light">
    <tr>
      <!-- colonnes principales avec les titres -->
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Ville</th>
      <th scope="col">N° de téléphone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <!-- fonction affiche dans la balise php pour afficher les infos correspondant aux titres -->
      <td> <?php $employe1->affName() ?> </td>
      <td> <?php $employe1->affPrenom() ?> </td>
      <td> <?php $employe1->affAdd() ?> </td>
      <td> <?php $employe1->affVille() ?> </td>
      <td> <?php $employe1->affTel() ?> </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td> <?php $employe2->affName() ?> </td>
      <td> <?php $employe2->affPrenom() ?> </td>
      <td> <?php $employe2->affAdd() ?> </td>
      <td> <?php $employe2->affVille() ?> </td>
      <td> <?php $employe2->affTel() ?> </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td> <?php $employe3->affName() ?> </td>
      <td> <?php $employe3->affPrenom() ?> </td>
      <td> <?php $employe3->affAdd() ?> </td>
      <td> <?php $employe3->affVille() ?> </td>
      <td> <?php $employe3->affTel() ?> </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td> <?php $employe4->affName() ?> </td>
      <td> <?php $employe4->affPrenom() ?> </td>
      <td> <?php $employe4->affAdd() ?> </td>
      <td> <?php $employe4->affVille() ?> </td>
      <td> <?php $employe4->affTel() ?> </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td> <?php $employe5->affName() ?> </td>
      <td> <?php $employe5->affPrenom() ?> </td>
      <td> <?php $employe5->affAdd() ?> </td>
      <td> <?php $employe5->affVille() ?> </td>
      <td> <?php $employe5->affTel() ?> </td>
    </tr>
  </tbody>
</table>

<?php
$content = ob_get_clean();
require '../template.php';
?>