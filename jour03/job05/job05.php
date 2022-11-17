<?php
$str= "On n’est pas le meilleur quand on le croit mais quand on le sait";
$voyelles = ["a","e","i","o","u","y",];
$consonnes = ["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z",];

$voy_cpt = '0';
$con_cpt = '0';

for ($i=0; isset($str[$i]); $i++){
    foreach($voyelles as $val){
        if($str[$i]==$val){
            $voy_cpt+=1;
            
        }
    }  
  }
for ($i=0; isset($str[$i]); $i++){
    foreach($consonnes as $cons){
        if($str[$i]==$cons){
            $con_cpt+=1;
        }
    }  
  }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <title>Tableau</title>
</head>
<body>
<table class="demo">
	<caption>Tableau 1</caption>
	<thead>
	<tr>
		<th>Voyelles</th>
		<th>Consonnes</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php echo $voy_cpt?></td>
		<td><?php echo $con_cpt?></td>
	</tr>
	</tbody>
</table>
</body>
</html>