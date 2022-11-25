<?php

$mysqli = new mysqli("localhost","root","","jour09");

$result = mysqli_query($mysqli,"SELECT * FROM `salles` ORDER BY `salles`.`capacite` ASC");
$row = $result->fetch_all();

?>

<!DOCTYPE html>
<html>
<head>
	<title>job09</title> 
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
				<th>id_etage</th>
				<th>capacite</th>
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
			<tr>
            <?php
                    for ($i=1; isset($row[2][$i]) ; $i++) 
                    { 
                        echo "<td>" . $row[2][$i] . "</td>";
                    }
                ?>
			</tr>
			<tr>
            <?php
                    for ($i=1; isset($row[3][$i]) ; $i++) 
                    { 
                        echo "<td>" . $row[3][$i] . "</td>";
                    }
                ?>
			</tr>
			<tr>
            <?php
                    for ($i=1; isset($row[4][$i]) ; $i++) 
                    { 
                        echo "<td>" . $row[4][$i] . "</td>";
                    }
                ?>
			</tr>
			<tr>
            <?php
                    for ($i=1; isset($row[5][$i]) ; $i++) 
                    { 
                        echo "<td>" . $row[5][$i] . "</td>";
                    }
                ?>
			</tr>
		</tbody>
	</table>
</body>
</html>