<?php
class Client
{
    private $nom;
    private $prenom;
    private $numeroClient;

    public function __construct(string $nom, string $prenom, int $numeroClient)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numeroClient = $numeroClient;        
    }

    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom = $nom;}

    public function getPrenom(){return $this->prenom;}
    public function setPrenom($prenom){$this->prenom = $prenom;}

    public function getNumeroClient(){return $this->numeroClient;}
    public function setNumeroClient($numeroClient){$this->numeroClient = $numeroClient;}
}
?>