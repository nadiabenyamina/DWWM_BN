<?php
class Employe
{
    protected $prenom;
    protected $nom;
    protected $numSecu;
    protected $salaire;
    protected $job;

    // float = nombres à virgule
    public function __construct(string $prenom, string $nom, string $numSecu, float $salaire, string $job)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->numSecu = $numSecu;
        $this->salaire = $salaire;
        $this->job = $job;
    }

    public function getPrenom(){return $this->prenom;}
    public function setPrenom(){$this->prenom;}

    public function getNom(){return $this->nom;}
    public function setNom(){$this->nom;}

    public function getNumSecu(){return $this->numSecu;}
    public function setNumSecu(){$this->numSecu;}

    public function getSalaire(){return $this->salaire;}
    public function setSalaire(){$this->salaire;}

    public function getJob(){return $this->job;}
    public function setJob(){$this->job;}

    function __toString()
    {
        return "Prénom : " . $this->prenom . "<br> Nom : " . $this->nom . 
        "<br> Numéro de sécurité sociale : " . $this->numSecu . "<br> Salaire : " . 
        $this->salaire . "<br> Job : " . $this->job . "<br>";
    }
    
    public function effectueSonJob()
    {
        if($this->job=="Soudeur")
        {
            return "Soudeur : le soudeur est un maître du feu. Il soude les pièces métalliques les unes aux autres grâce au feu." .
            "<br> <br>";
        }
        elseif ($this->job=="Assistant Mécanicien")
        {
            return "Aide mécanicien : le toutou du chef mécanicien, il s'occupe des tâches les moins compliqués comme la vidange,
            le changement des pneus, etc." . "<br> <br>";
        }
        elseif ($this->job=="Magasinière")
        {
            return "Magasinière : réceptionne et stocke les produits des fournisseurs. Il suit les
            instructions du chef magasinier et maintient son stock à jour." . "<br> <br>";
        }
        elseif ($this->job=="Chef Maintenance")
        {
            return "Chef de maintenance : c'est le chef, il supervise
            son équipe, tout simplement." . "<br>";
        }
        else
        {
            return " ";
        }
    }
}
?>