<?php

class Bd
{
    private $id;
    private $titre;
    private $auteur;
    private $dessinateur;
    private $genre;
    private $editeur;
    private $pays;
    private $dateSortie;
    private $prixVente;
    private $nbPages;
    private $resume;
    private $image;

    public function __construct($id, $titre, $auteur, $dessinateur, $genre, $editeur,
    $pays, $dateSortie, $prixVente, $nbPages, $resume, $image)
    {
        $this->id=$id;
        $this->titre=$titre;
        $this->auteur=$auteur;
        $this->dessinateur=$dessinateur;
        $this->genre=$genre;
        $this->editeur=$editeur;
        $this->pays=$pays;
        $this->dateSortie=$dateSortie;
        $this->prixVente=$prixVente;
        $this->nbPages=$nbPages;
        $this->resume=$resume;
        $this->image=$image;
    }

    public function getId(){return $this->id;}

    public function getTitre(){return $this->titre;}
    public function setTitre($titre){$this->titre = $titre;}

    public function getAuteur(){return $this->auteur;}
    public function setAuteur($auteur){$this->auteur = $auteur;}

    public function getDessinateur(){return $this->dessinateur;}
    public function setDessinateur($dessinateur){$this->dessinateur = $dessinateur;}

    public function getGenre(){return $this->genre;}
    public function setGenre($genre){$this->genre = $genre;}

    public function getEditeur(){return $this->editeur;}
    public function setEditeur($editeur){$this->editeur = $editeur;}

    public function getPays(){return $this->pays;}
    public function setPays($pays){$this->pays = $pays;}

    public function getDateSortie(){return $this->dateSortie;}
    public function setDateSortie($dateSortie){$this->dateSortie = $dateSortie;}

    public function getPrixVente(){return $this->prixVente;}
    public function setPrixVente($prixVente){$this->prixVente = $prixVente;}

    public function getNbPages(){return $this->nbPages;}
    public function setNbPages($nbPages){$this->nbPages = $nbPages;}

    public function getResume(){return $this->resume;}
    public function setResume($resume){$this->resume = $resume;}
    
    public function getImage(){return $this->image;}
    public function setImage($image){$this->image = $image;}
}