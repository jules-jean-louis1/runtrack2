<?php
$mysqli = new mysqli("localhost","root","","jour09");

$result = mysqli_query($mysqli,"SELECT nom, prenom, naissance FROM `etudiants` WHERE `sexe` LIKE 'Femme' ");
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
				<th>Nom</th>
				<th>Prénom</th>
				<th>Naissance</th>
			</tr>
		</thead>
		<tbody>
			<tr>
                <?php
                    for ($i=0; isset($row[0][$i]) ; $i++) 
                    { 
                        echo "<td>" . $row[0][$i] . "</td>";
                    }
                ?>
			</tr>
			<tr>
            <?php
                    for ($i=0; isset($row[1][$i]) ; $i++) 
                    { 
                        echo "<td>" . $row[1][$i] . "</td>";
                    }
                ?>
			</tr>
		</tbody>
	</table>
</body>
</html>