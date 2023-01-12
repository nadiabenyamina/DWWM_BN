<?php
require_once "models/LivreManager.class.php";

class LivresController
{
    private $livreManager;

    public function __construct()
    {
        $this->livreManager = new LivreManager;
        $this->livreManager->chargementLivres();
    }

    public function afficherLivres()
    {
        $livres = $this->livreManager->getLivres();
        require "views/livres.view.php";
    }

    public function afficherLeLivre($id)
    {
        echo "l'id est : ".$id;
        $livre = $this->livreManager->getLivreById($id);
        echo $livre->getTitre();
    }
}