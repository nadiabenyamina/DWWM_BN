#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

#------------------------------------------------------------
# Table: employe
#------------------------------------------------------------

CREATE TABLE employe(
        idEmploye Int  Auto_increment  NOT NULL ,
        nom      Varchar (50) NOT NULL ,
        prenom   Varchar (50) NOT NULL ,
        sexe     Varchar (50) NOT NULL ,
        department   Varchar (50) NOT NULL ,
        salaire  Varchar (50) NOT NULL ,
        dateContrat  Date NOT NULL
	,CONSTRAINT employe_PK PRIMARY KEY (idEmploye)
)ENGINE=InnoDB;

