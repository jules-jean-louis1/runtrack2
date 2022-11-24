SELECT `etage`.`nom` 
AS `nom_etage`, `salles`.`nom` AS `Biggest Room`, `salles`.`capacite` AS `capacite_salle` 
FROM `salles` 
INNER JOIN `etage` ON `salles`.`id_etage` = `etage`.`id` 
WHERE `salles`.`capacite` = (SELECT MAX(`capacite`) FROM `salles`);