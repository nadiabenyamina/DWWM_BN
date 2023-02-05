DROP TABLE IF EXISTS etudiants ;
CREATE TABLE etudiants (
idEtudiant INT(11) AUTO_INCREMENT NOT NULL,
nomEtudiant VARCHAR(20),
prenomEtudiant VARCHAR(20),
adresseEtudiant VARCHAR(40),
villeEtudiant VARCHAR(10),
codePostalEtudiant INT(11),
telephoneEtudiant VARCHAR(14),
dateEntreeEtudiant DATE,
anneeEtudiant INT(11),
remarqueEtudiant VARCHAR(40),
sexeEtudiant CHAR(1),
dateNaissanceEtudiant DATE,
PRIMARY KEY (idEtudiant)) ENGINE=InnoDB;

DROP TABLE IF EXISTS epreuves ;
CREATE TABLE epreuves (
idEpreuve INT(11) AUTO_INCREMENT NOT NULL,
libelleEpreuve VARCHAR(20),
idEnseignantEpreuve INT(11) NOT NULL,
idMatiereEpreuve INT(11) NOT NULL,
dateEpreuve DATE,
coefficientEpreuve INT(11),
anneeEpreuve INT(11),
PRIMARY KEY (idEpreuve)) ENGINE=InnoDB;

DROP TABLE IF EXISTS enseignants ;
CREATE TABLE enseignants (
idEnseignant INT(11) AUTO_INCREMENT NOT NULL,
nomEnseignant VARCHAR(20),
prenomEnseignant VARCHAR(20),
fonctionEnseignant VARCHAR(25),
adresseEnseignant VARCHAR(10),
villeEnseignant VARCHAR(10),
codePostalEnseignant INT(11),
telephoneEnseignant VARCHAR(15),
datenaiens DATE,
dateEmbaucheEnseignant DATE,
PRIMARY KEY (idEnseignant)) ENGINE=InnoDB;

DROP TABLE IF EXISTS matieres ;
CREATE TABLE matieres (
idMatiere INT(11) AUTO_INCREMENT NOT NULL,
nomMatiere VARCHAR(15),
idModule INT(11) NOT NULL,
coefficientMatiere INT(11),
PRIMARY KEY (idMatiere)) ENGINE=InnoDB;

DROP TABLE IF EXISTS modules ;
CREATE TABLE modules (
idModule INT(11) AUTO_INCREMENT NOT NULL,
nomModule VARCHAR(15),
coefficientModule INT(11),
PRIMARY KEY (idModule)) ENGINE=InnoDB;

DROP TABLE IF EXISTS avoir_note ;
CREATE TABLE avoir_note (
idAvoirNote INT(11) AUTO_INCREMENT NOT NULL,
idEtudiant INT(11) NOT NULL,
idEpreuve INT(11) NOT NULL,
note INT(11),
PRIMARY KEY (idAvoirNote)) ENGINE=InnoDB;

DROP TABLE IF EXISTS faire_cours ;
CREATE TABLE faire_cours (
idFaireCours INT(11) AUTO_INCREMENT NOT NULL,
idEnseignant INT(11) NOT NULL,
idMatiere INT(11) NOT NULL,
annee INT(11),
PRIMARY KEY (idFaireCours)) ENGINE=InnoDB;

ALTER TABLE epreuves ADD CONSTRAINT FK_epreuves_idEnseignant FOREIGN KEY (idEnseignantEpreuve) REFERENCES enseignants (idEnseignant);
ALTER TABLE epreuves ADD CONSTRAINT FK_epreuves_idMatiere FOREIGN KEY (idMatiereEpreuve) REFERENCES matieres (idMatiere);
ALTER TABLE matieres ADD CONSTRAINT FK_matieres_idModule FOREIGN KEY (idModule) REFERENCES modules (idModule);
ALTER TABLE avoir_note ADD CONSTRAINT FK_avoir_note_idEtudiant FOREIGN KEY (idEtudiant) REFERENCES etudiants (idEtudiant);
ALTER TABLE avoir_note ADD CONSTRAINT FK_avoir_note_idEpreuve FOREIGN KEY (idEpreuve) REFERENCES epreuves (idEpreuve);
ALTER TABLE faire_cours ADD CONSTRAINT FK_faire_cours_idEnseignant FOREIGN KEY (idEnseignant) REFERENCES enseignants (idEnseignant);
ALTER TABLE faire_cours ADD CONSTRAINT FK_faire_cours_idMatiere FOREIGN KEY (idMatiere) REFERENCES matieres (idMatiere);
