<?php ob_start() ?>

<div class="container">
    <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-success"> POO - Les objets (3)</h1>
</div>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col"> </th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Ville</th>
      <th scope="col">N° de téléphone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Parker</td>
      <td>Peter</td>
      <td>1290 Avenue of the Americas</td>
      <td>New York</td>
      <td>06.22.01.41.59</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<?php
class Employe
{
    public $name;
    public $prenom;
    public $adresse;
    public $ville;
    public $tel;

    public function __construct($name, $prenom, $adresse, $ville, $tel)
    {
        $this->name = $name;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->tel = $tel;
    }

    public function affiche()
    {
        echo "Nom : " . $this->name . "<br>" . "Prénom : " . $this->prenom . "<br>" . "Adresse : " . 
        $this->adresse . "<br>" . "Ville : " . $this->ville . "<br>" . "N° de tel : " . $this->tel . "<br>" . "<br>";
    }
}

$employe1 = new Employe('Parker', 'Peter', '1290 Avenue of the Americas', 'New York', '06.22.01.41.59');
$employe2 = new Employe('Simpson', 'Bart', '742 Evergreen Terrace', 'Springfield', '06.11.22.33.44');
$employe3 = new Employe('Danvers', 'Kara', '2900 West Alameda Avenue', 'California', '06.55.66.77.88');
$employe4 = new Employe('Uzumaki', 'Naruto', 'Chiyoda-City', 'Tokyo', '06.99.11.12.13');
$employe4 = new Employe('Holmes', 'Sherlock', '221B Baker Street', 'London', '06.14.15.16.17');
$employe5 = new Employe('Whibley', 'Deryck', 'Van Nuys', 'California', '06.18.19.20.21');

$employes = [$employe1, $employe2, $employe3, $employe4, $employe5];

foreach ($employes as $value){
    $value->affiche();
}

sort($employes);
?>

<?php
$content = ob_get_clean();
require '../template.php';
?>