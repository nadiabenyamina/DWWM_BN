<?php
require('class/1_client.php');
require('class/1_commande.php');
require('class/1_lignecommange.php');
require('class/1_produit.php');

$client1 = new Client("Croft", "Lara", 25101996);

echo "\n----- Information client -----\n\n";
echo "N° : " . $client1->getNumeroClient() . ".\nIdentité : " . $client1->getPrenom() . " " . $client1->getNom() . ".";
echo  "\n\n";

$produit1 = new Produit("The Last of Us Pt.3", "Jeux Vidéo PS5", "TLOU", 70);
$produit2 = new Produit("Uncharted 5", "Jeux Vidéo PS5", "UNCH", 65);
// $produit3 = new Produit("XBOX ONE SERIE Z", "Console de Jeux", "XFXX", 599.99);
// $produit4 = new Produit("PLAYSTATION 6", "Console de Jeux", "PS10", 799.99);
// $produit5 = new Produit("Samsung Galaxy Watch 5", "Montre Connectée", "SGW7", 280);
// $produit6 = new Produit("Samsung Galaxy S23", "Téléphone", "SGS23U", 899);
// $produit7 = new Produit("GOD OF WAR RAGNAROK Édition Collector", "Jeux Vidéo", "GOWRC", 270);
// $produit8 = new Produit("XP-PEN Artist 12 Pro", "Tablette Graphique", "XPA12P", 279.99);
// $produit9 = new Produit("Logitech G915 LIGHTSPEED", "Clavier sans fil", "LG915LS", 199.99 );
// $produit10 = new Produit("Razer Basilisk V3 Pro", "Souris sans fil", "RBV3P", 180);

$produits = [$produit1, $produit2];
// , $produit3, $produit4, $produit5, $produit6, $produit7, $produit8, $produit9, $produit10];

// $commande1 = new Commande("Commande n°41", "", []);
// $commande2 = new Commande("Commande n°666", "", []);
// $commande3 = new Commande("Commande n°221", "", []);

// $choixProduit = readline("Choisissez le produit que vous voulez : ");
// $choixQuantite = readline("Choisissez une quantité de ce produit : ");

echo "\n----- Produits disponibles -----\n\n";
// afficher la liste des produits
foreach ($produits as $affiche){echo $affiche->afficherSesInfos() . "\n\n";}


?>