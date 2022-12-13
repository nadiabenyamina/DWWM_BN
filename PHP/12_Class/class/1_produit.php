<?php
class Produit
{
    private $libelle;
    private $description;
    private $reference;
    private $prixUnitaireTTC;

    public function __construct(string $libelle, string $description, string $reference, float $prixUnitaireTTC)
    {
        $this->libelle = $libelle;
        $this->description = $description;
        $this->reference = $reference;
        $this->prixUnitaireTTC = $prixUnitaireTTC;
    }

    public function getLibelle(){return $this->libelle;}
    public function setLibelle($libelle){$this->libelle = $libelle;}

    public function getDescription(){return $this->description;}
    public function setDescription($description){$this->description = $description;}

    public function getReference(){return $this->reference;}
    public function setReference($reference){$this->reference = $reference;}

    public function getPrixUnitaireTTC(){return $this->prixUnitaireTTC;}
    public function setPrixUnitaireTTC($prixUnitaireTTC){$this->prixUnitaireTTC = $prixUnitaireTTC;}

    public function afficherSesInfos()
    {
        return "Nom du produit : " . $this->libelle . "\nDescription du produit : " . $this->description . 
        "\nRéférence du produit : " . $this->reference . "\nPrix TTC : " . $this->prixUnitaireTTC . "€\n";
    }
}
?>