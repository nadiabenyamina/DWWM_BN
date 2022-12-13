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

    public function calculTotalLigneTTC()
    {
        $exemplaire = readline("Combien d'exemplaires ? ");
        $totalLigne = $exemplaire * $this->prixUnitaireTTC;
        return $totalLigne;
    }

    public function affichage()
    {
        // return "Total : " . calculTotalLigneTTC() . "\n\n";
    }
}
?>