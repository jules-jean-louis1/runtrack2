<?php
$mysqli = new mysqli("localhost","root","","jour09");
// Check connection
/* if ($mysqli -> connect_errno) 
{
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
} */

$result = mysqli_query($mysqli,"SELECT * FROM etudiants");
$row = $result->fetch_all();
/* var_dump($row);
 */
/* for ($i=1; isset($row[0][$i]) ; $i++) { 
    echo $row[0][$i];
} */

?>

<!DOCTYPE html>
<html>
<head>
	<title>Job1
    </title> 
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
            <?php
            for ($i=0; isset($row[$i]) ; $i++) { 
                if ($i % 2 === 0) {
					print("</tr>\n<tr>");
                    for ($j=0; isset($row[$i][$j]) ; $j++) 
                    { 
						echo "<td>" . $row[$i][$j] . "</td>";
                    }
				}
				print("<td>$row</td>\n");
    			$i++;
            }
            print('</tr>');
            
            ?>
		</tbody>
	</table>
</body>
</html>
