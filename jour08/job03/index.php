
<?php



?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
</head>
<body>
    <form action="index.php" method="post">
        Entrez votre prénom : <input type="text" name="prenom" /><br>
        <input type="submit" value="valider" /> <br><br>
        <?php
        session_start();
        $_SESSION['fname'] = $_POST['prenom'];
        /* echo "Prénom tapé par l'utilisateur : ". */print_r($_SESSION['fname']);
        ?> 
    </form> 
</body>
</html>