SELECT salles.nom 
AS Biggest_Room, salles.capacite, etage.nom 
FROM salles JOIN `etage` ON salles.id_etage = etage.id ORDER BY (salles.capacite) DESC LIMIT 1; 