<?php

class Bd
{
    private $id;
    private $titre;
    private $auteur;
    private $dessinateur;
    private $genre;
    private $pays;
    private $editeur;
    private $dateSortie;
    private $prixVente;
    private $nbPages;
    private $resume;
    private $image;

    public function __construct($id, $titre, $auteur, $dessinateur, $genre, $pays,
    $editeur, $dateSortie, $prixVente, $nbPages, $resume, $image)
    {
        $this->id=$id;
        $this->titre=$titre;
        $this->auteur=$auteur;
        $this->dessinateur=$dessinateur;
        $this->genre=$genre;
        $this->pays=$pays;
        $this->editeur=$editeur;
        $this->dateSortie=$dateSortie;
        $this->prixVente=$prixVente;
        $this->nbPages=$nbPages;
        $this->resume=$resume;
        $this->image=$image;
    }

}