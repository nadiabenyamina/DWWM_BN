<?php
require ('./servcice/fonction.php');
spl_autoload_register('chargerClasse');


$personne = new PersonneIF("nadou", "22/01/1997", 41666.22);

echo $personne->getNom() . "\n";
echo $personne->getDateN() . "\n";
echo $personne->getSalaire() . "\n";