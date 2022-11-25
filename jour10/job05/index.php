<?php

$mysqli = new mysqli("localhost","root","","jour09");

$result = mysqli_query($mysqli,"SELECT COUNT(*) FROM etudiants");
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
				<th>Nombres d'étudiants</th>
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

