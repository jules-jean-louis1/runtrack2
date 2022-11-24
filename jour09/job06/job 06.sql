SELECT * FROM 'etudiants' WHERE 'prenom' LIKE 'T%';


SELECT * FROM `etudiants` WHERE `prenom` REGEXP 'T' ORDER BY `prenom` ASC

/* Faire un recherche dans les prénoms avec la lettre "T" en changeant like pour REGEXP