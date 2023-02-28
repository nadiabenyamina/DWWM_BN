<?php
require_once "Model.class.php";
require_once "Bd.class.php";

class BdManager extends Model
{
    private $bds; // tableau

    // le constructeur n'est pas obligatoire, il est ajouté automatiquement

    public function ajoutBd($bd){$this->bds[] = $bd;}

    public function getBds(){return $this->bds;}

    public function chargementbds(){
        $req = $this->getBdd()->prepare("SELECT * FROM bds");
        $req->execute();
        // évite les doublons
        $mesbds = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        // on génère nos bds
        foreach($mesbds as $bd){
            $b = new bd($bd['id'], $bd['titre'], $bd['auteur'], $bd['dessinateur'], $bd['genre'], $bd['editeur'],
            $bd['pays'], $bd['dateSortie'], $bd['prixVente'], $bd['nbPages'], $bd['resume'], $bd['image']);
            $this->ajoutbd($b);
        }
    }

    public function getBdById($id)
    {
        for($i=0; $i<count($this->bds); $i++){
            if($this->bds[$i]->getId() == $id){
                return $this->bds[$i];
            }
        }
    }

    public function ajoutBdBd($titre, $auteur, $dessinateur, $genre, $editeur, $pays,
                                $dateSortie, $prixVente, $nbPages, $resume, $image)
    {
        $req = "
        INSERT INTO bds (titre, auteur, dessinateur, genre, editeur, pays, dateSortie, prixVente, nbPages, resume, image)
        values (:titre, :auteur, :dessinateur, :genre, :editeur, :pays, :dateSortie, :prixVente, :nbPages, :resume, :image)
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
        $stmt->bindValue(":auteur", $auteur, PDO::PARAM_STR);
        $stmt->bindValue(":dessinateur", $dessinateur, PDO::PARAM_STR);
        $stmt->bindValue(":genre", $genre, PDO::PARAM_STR);
        $stmt->bindValue(":editeur", $editeur, PDO::PARAM_STR);
        $stmt->bindValue(":pays", $pays, PDO::PARAM_STR);
        $stmt->bindValue(":dateSortie", $dateSortie, PDO::PARAM_STR);
        $stmt->bindValue(":prixVente", $prixVente, PDO::PARAM_INT);
        $stmt->bindValue(":nbPages", $nbPages, PDO::PARAM_INT);
        $stmt->bindValue(":resume", $resume, PDO::PARAM_STR);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $bd = new bd($this->getBdd()->lastInsertId(), $titre, $auteur, $dessinateur, $genre, $editeur,
                        $pays, $dateSortie, $prixVente, $nbPages, $resume, $image);
            $this->ajoutbd($bd);
        }
    }

    public function suppressionbdBd($id)
    {
        // on ne modifie jamais les requêtes préparées
        $req = "
        DELETE FROM bds WHERE id = :idbd
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idbd", $id, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $bd = $this->getbdById($id);
            unset($bd);
        }
    }

    public function modificationbdBd($id, $titre, $nbPages, $image)
    {
        // SQL n'est pas sensible à la casse, on peut écrire UPDATE en minuscule ou majuscule, la requête fonctionnera toujours
        $req = "
        update bds
        set titre = :titre, auteur = :auteur, dessinateur = :dessinateur, genre = :genre, editeur = :editeur, pays = :pays,
        dateSortie = :dateSortie, prixVente = :prixVente, nbPages = :nbPages, resume = :resume, image = :image
        where id = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
        $stmt->bindValue(":auteur", $auteur, PDO::PARAM_STR);
        $stmt->bindValue(":dessinateur", $dessinateur, PDO::PARAM_STR);
        $stmt->bindValue(":genre", $genre, PDO::PARAM_STR);
        $stmt->bindValue(":editeur", $editeur, PDO::PARAM_STR);
        $stmt->bindValue(":pays", $pays, PDO::PARAM_STR);
        $stmt->bindValue(":dateSortie", $dateSortie, PDO::PARAM_STR);
        $stmt->bindValue(":prixVente", $prixVente, PDO::PARAM_INT);
        $stmt->bindValue(":nbPages", $nbPages, PDO::PARAM_INT);
        $stmt->bindValue(":resume", $resume, PDO::PARAM_STR);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        // libère l'accès à la bdd
        $stmt->closeCursor();

        if($resultat > 0){
            $this->getbdById($id)->setTitre($titre);
            $this->getbdById($id)->setTitre($titre);
            $this->getbdById($id)->setAuteur($auteur);
            $this->getbdById($id)->setDessinateur($dessinateur);
            $this->getbdById($id)->setGenre($genre);
            $this->getbdById($id)->setEditeur($editeur);
            $this->getbdById($id)->setPays($pays);
            $this->getbdById($id)->setDateSortie($dateSortie);
            $this->getbdById($id)->setPrixVente($prixVente);
            $this->getbdById($id)->setNbPages($nbPages);
            $this->getbdById($id)->setResume($resume);
            $this->getbdById($id)->setImage($image);
        }
    }
}