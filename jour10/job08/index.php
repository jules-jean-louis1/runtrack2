<?php

$mysqli = new mysqli("localhost","root","","jour09");

$result = mysqli_query($mysqli,"SELECT SUM(capacite) FROM `jour09`.`salles`");
$row = $result->fetch_all();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Job08</title> 
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
				<th>Capacité Totale</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $row[0][0]; ?></td>
			</tr>
		</tbody>
	</table>
</body>
</html>