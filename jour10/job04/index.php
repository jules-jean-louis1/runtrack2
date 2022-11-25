<!-- Job 04
    En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
    SQL, récupérez l’ensemble des informations des étudiants dont prenom commence par
    un “T”. Affichez le résultat de cette requête dans un tableau html. La première ligne de
    votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
    données présentes dans votre base de données. -->

<?php

$mysqli = new mysqli("localhost","root","","jour09");

$result = mysqli_query($mysqli,"SELECT * FROM `etudiants` WHERE `prenom` REGEXP 'T' ORDER BY `prenom` ASC");
$row = $result->fetch_all();

?>

<!DOCTYPE html>
<html>
<head>
	<title>HTML Table Generator</title> 
	<style>
		table {
			border:1px solid #b3adad;
			border-collapse:collapse;
			padding:7px;
		}
		table th {
			border:1px solid #b3adad;
			padding:7px;
			background: #f0f0f0;
			color: #313030;
		}
		table td {
			border:1px solid #b3adad;
			text-align:center;
			padding:7px;
			background: #ffffff;
			color: #313030;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
                <th>Prénom</th>
				<th>Nom</th>
				<th>Date</th>
				<th>Sexe</th>
				<th>E-mail</th>
			</tr>
		</thead>
		<tbody>
			<tr>
                <?php
                    for ($i=1; isset($row[0][$i]) ; $i++) 
                    { 
                        echo "<td>" . $row[0][$i] . "</td>";
                    }
                ?>
			</tr>
			<tr>
            <?php
                    for ($i=1; isset($row[1][$i]) ; $i++) 
                    { 
                        echo "<td>" . $row[1][$i] . "</td>";
                    }
                ?>
			</tr>
		</tbody>
	</table>
</body>
</html>