<?php
class Livre
{
    private $id;
    private $titre;
    private $auteur;
    private $nbPages;
    private $image;

    

    public function __construct($id, $titre, $auteur, $nbPages, $image)
    {
        $this->id=$id;
        $this->titre=$titre;
        $this->auteur=$auteur;
        $this->nbPages=$nbPages;
        $this->image=$image;
        
    }

    public function getId(){return $this->id;}
    // setId n'est pas obligé vu qu'il ne sera pas modifié
    // public function setId($id){$this->id = $id;}

    public function getTitre(){return $this->titre;}
    public function setTitre($titre){$this->titre = $titre;}

    public function getAuteur(){return $this->auteur;}
    public function setAuteur($auteur){$this->auteur = $auteur;}

    public function getNbPages(){return $this->nbPages;}
    public function setNbPages($nbPages){$this->nbPages = $nbPages;}

    public function getImage(){return $this->image;}
    public function setImage($image){$this->image = $image;}
}