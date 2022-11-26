<?php

$mysqli = new mysqli("localhost","root","","jour09");

$result = mysqli_query($mysqli,"SELECT salles . nom , etage.nom FROM `salles` INNER JOIN `etage` ON salles.id_etage = etage.id;");
$row = $result->fetch_all();

?>

<!DOCTYPE html>
<html>
<head>
	<title>job13</title> 
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
				<th>Nom des salles</th>
				<th>Nom de l'etage</th>
			</tr>
		</thead>
		<tbody>
			<tr>
                <?php
                for ($i=0; isset($row[$i]) ; $i++) { 
                    echo "<tr>";
                    for ($j=0; isset($row[$i][$j]) ; $j++) 
                    { 
                        echo "<td>" . $row[$i][$j] . "</td>";	# code...
                    }
                    echo "</tr>";
                }
                ?>
		</tbody>
	</table>
</body>
</html>