<?php
require_once "Model.class.php";
require_once "Livre.class.php";

class LivreManager extends Model
{
    private $livres; // tableau de Livre

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
            $l = new Livre($livre['id'], $livre['titre'], $livre['nbPages'], $livre['image']);
            $this->ajoutLivre($l);
        }
    }

    public function getLivreById($id)
    {
        for($i=0; $i<count($this->livres); $i++){
            // if($this->livres[$i]->getId() === $id){   <- === ne fonctionne pas ici, mettre ==
            if($this->livres[$i]->getId() == $id){
                return $this->livres[$i];
            }
        }
    }

    public function ajoutLivreBd($titre, $nbPages, $image)
    {
        $req = "
        INSERT INTO livres (titre, nbPages, image)
        values (:titre, :nbPages, :image)";
        // stmt = statement, bindvalue et les : permettent de "binder"
        // PARAM_STR = permet de sécuriser le "string" donc évite d'ajouter un INT par exemple engendre un message d'erreur
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
        $stmt->bindValue(":nbPages", $nbPages, PDO::PARAM_INT);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $livre = new Livre($this->getBdd()->lastInsertId(), $titre, $nbPages, $image);
            $this->ajoutLivre($livre);
        }
    }

    public function suppressionLivreBd($id)
    {
        // on ne modifie jamais les requêtes préparées
        $req = "
        DELETE FROM livres WHERE id = :idLivre
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idLivre", $id, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            // unset prend une variable en paramètre et non une valeur
            $livre = $this->getLivreById($id);
            unset($livre);
        }
    }

    public function modificationLivreBd($id, $titre, $nbPages, $image)
    {
        // SQL n'est pas sensible à la casse, on peut écrire UPDATE en minuscule, la requête fonctionnera toujours
        $req = "
        update livres
        set titre = :titre, nbPages = : nbPages, image = :image
        where id = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
        $stmt->bindValue(":nbPages", $nbPages, PDO::PARAM_INT);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        // libère l'accès à la bdd
        $stmt->closeCursor();

        if($resultat > 0){
            $this->getLivreById($id)->setTitre($titre);
            $this->getLivreById($id)->setNbPages($nbPages);
            $this->getLivreById($id)->setImage($image);
        }
    }
}