<?php
class PersonneIF implements IFormatage
{
    private $nom;
    private $dateNaissance;
    private $salaire;

    public function __construct($nom, $dateNaissance, $salaire)
    {
        $this->nom = $this->formatageChaine($nom);
        $this->dateNaissance = $this->formatageDate($dateNaissance);
        $this->salaire = $this->formatageNombre($salaire);
    }

    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom = $nom;}

    public function getDateN(){return $this->nom;}
    public function setDateN($dateNaissance){return $this->dateNaissance = $dateNaissance;}

    public function getSalaire(){return $this->nom;}
    public function setSalaire($salaire){return $this->salaire = $salaire;}
    // getter setter

    public function formatageChaine($chaine)
    {
        return strtoupper($chaine);
    }

    public function formatageNombre($nombre)
    {
        return number_format($nombre, 2, ",", " ");
    }

    public function formatageDate($date)
    {
        
    }
}