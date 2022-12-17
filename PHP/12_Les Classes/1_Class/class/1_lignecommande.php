<?php
class LigneCommande
{
    private $produit;
    private $quantite;

    public function __construct(string $produit, int $quantite)
    {
        $this->produit = $produit;
        $this->quantite = $quantite;
    }

    public function getProduit(){return $this->produit;}
    public function setProduit($produit){$this->produit = $produit;}

    public function getQuantite(){return $this->quantite;}
    public function setQuantite($quantite){$this->quantite = $quantite;}

    public function calculTotalLigneTTC($produit)
    {
        $calcul = $produit->getPrixUnitaireTTC() * $this->quantite;
        return $calcul;
    }

    public function affichage($produit)
    {
        $phrase="| Libellé : %40s | Prix : %10s | Quantité : %10s |\n";
        echo sprintf($phrase, $this->produit, $this->calculTotalLigneTTC($produit), $this->quantite);
    }
}
?>