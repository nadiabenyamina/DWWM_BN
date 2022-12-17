<?php
class Commande
{
    private $numeroCommande;
    private $client;
    private $listeLigneCommande;

    public function __construct(string $numeroCommande, string $client, array $listeLigneCommande)
    {
        $this->numeroCommande = $numeroCommande;
        $this->client = $client;
        $this->listeLigneCommande = $listeLigneCommande;
    }

    public function getNumeroCommande(){return $this->numeroCommande;}
    public function setNumeroCommande(){$this->numeroCommande;}

    public function getClient(){return $this->client;}
    public function setClient(){$this->client;}

    public function getListeCommande(){return $this->listeLigneCommande;}
    public function setListeCommande(){$this->listeLigneCommande;}

    public function affichageCommande($client, $prix)
    {
        "Prix Total TTC : " . $prix->calculTotalTTC();
    }

    public function calculTotalTTC($quantite, $prixttc)
    {
        $resultat = $quantite->getQuantite() * $prixttc->getPrixUnitaireTTC();
        return $resultat;
    }
}
?>