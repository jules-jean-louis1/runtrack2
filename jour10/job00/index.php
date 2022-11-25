<?php
// Souvent on identifie cet objet par la variable $conn ou $db
try
{
    $db = new PDO(
        'mysql:host=localhost;dbname=jour09;charset=utf8',
        'root',
        'root'
    );
}
catch(Exception $e)
{
    die('Erreur : ' .$e->getMessage());
}

$sqlQuery = 'SELECT * FROM `etage`';
$listestat = $db->prepare($sqlQuery);
$listestat->execute();
$liste = $listestat->fetchAll();

foreach ($variable as $value) {
?>
    <p><?php echo $liste['etages']; ?></p>
<?php
}
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test Mysql</title>
</head>
<body>
    
</body>
</html>