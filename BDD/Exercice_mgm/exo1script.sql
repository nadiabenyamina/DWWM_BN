#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

#------------------------------------------------------------
# Table: client
#------------------------------------------------------------

CREATE TABLE client(
        idClient Int  Auto_increment  NOT NULL ,
        nom      Varchar (50) NOT NULL ,
        prenom   Varchar (50) NOT NULL ,
        email    Varchar (50) NOT NULL ,
        pwd      Varchar (50) NOT NULL
	,CONSTRAINT client_PK PRIMARY KEY (idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commande
#------------------------------------------------------------

CREATE TABLE commande(
        idCommande   Int  Auto_increment  NOT NULL ,
        numero       Varchar (50) NOT NULL ,
        dateCommande Date NOT NULL ,
        idClient     Int NOT NULL
	,CONSTRAINT commande_PK PRIMARY KEY (idCommande)

	,CONSTRAINT commande_client_FK FOREIGN KEY (idClient) REFERENCES client(idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

CREATE TABLE categorie(
        idCategorie Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL
	,CONSTRAINT categorie_PK PRIMARY KEY (idCategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: produit
#------------------------------------------------------------

CREATE TABLE produit(
        idProduit   Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        reference   Varchar (50) NOT NULL ,
        prix        Varchar (50) NOT NULL ,
        idCategorie Int
	,CONSTRAINT produit_PK PRIMARY KEY (idProduit)

	,CONSTRAINT produit_categorie_FK FOREIGN KEY (idCategorie) REFERENCES categorie(idCategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: lignecommande
#------------------------------------------------------------

CREATE TABLE LigneCommande(
        idLigneCommande Int Auto_increment NOT NULL ,
        idCommande Int NOT NULL ,
        idProduit  Int NOT NULL ,
        quantite   Int NOT NULL
	,CONSTRAINT LigneCommande_PK PRIMARY KEY (idLigneCommande)

	,CONSTRAINT LigneCommande_commande_FK FOREIGN KEY (idCommande) REFERENCES commande(idCommande)
	,CONSTRAINT LigneCommande_produit0_FK FOREIGN KEY (idProduit) REFERENCES produit(idProduit)
)ENGINE=InnoDB;

