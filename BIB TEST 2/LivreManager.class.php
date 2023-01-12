<?php
require_once "Model.class.php";
require_once "Livre.class.php";

class LivreManager extends Model
{
    private $livres;

    // le constructeur n'est pas obligatoire, il est ajouté automatiquement

    public function ajoutLivre($livre){$this->livres[] = $livre;}

    public function getLivres(){return $this->livres;}

    public function chargementLivres(){
        $req = $this->getBdd()->prepare("SELECT * FROM livres");
        $req->execute();
        // évite les doublons
        $mesLivres = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        // echo "<pre>";
        // print_r($mesLivres);
        // echo "</pre>";

        // on génère nos livres
        foreach($mesLivres as $livre){
            $l = new Livre($livre['id'], $livre['titre'], $livre['auteur'], $livre['nbPages'], $livre['image']);
            $this->ajoutLivre($l);
        }
    }
}