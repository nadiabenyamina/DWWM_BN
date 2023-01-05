USE entreprise;

INSERT INTO `employe` (`idEmploye`, `nom`, `prenom`, `sexe`, `department`, `salaire`, `dateContrat`) VALUES 
(1, 'Dupont', 'Robert', 'M', 'Marketing', 25000, '2010-03-21'),
(2, 'Dupont', 'Aline', 'F', 'Communication', 8500, '2013-11-11'),
(3, 'Durand', 'Laurence', 'F', 'Marketing', 14000, '1996-01-02'),
(4, 'Lejeune', 'Sylvie', 'F', 'Marketing', 21500, '2018-09-02'),
(5, 'Lefort', 'Max', 'M', NULL, 12000, '2005-09-11');
COMMIT;