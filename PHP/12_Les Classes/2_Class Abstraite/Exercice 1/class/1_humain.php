<?php
// Attribut : nom
// Méthode : seDeplacer

abstract class Humain implements Deplacement
{
    protected $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom = $nom;}
}