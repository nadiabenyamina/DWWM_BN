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

    public function getListeLC(){return $this->listeLigneCommande;}
    public function setListeLC(){$this->listeLigneCommande;}

    public function affichageCommande()
    {
        $num = rand(0, 1000);
        return "Commande n°" . $num;
    }
    
    public function calculTotalTTC(){}
}
?>