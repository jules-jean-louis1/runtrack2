<!-- Job 01
    Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
    visitée, ajoutez 1. Afficher le contenu de cette variable.
    Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php

session_start();

$nbvisites = '0';
if (isset($_POST['reset'])){
    $_SESSION['visites'] = '0';
}
if (isset($_SESSION['visites'])) {
    $_SESSION['visites'] = $_SESSION['visites']+1;
} else {
    $_SESSION['visites']=1;
}

$nbvisites = $_SESSION['visites'];
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nbvs"><?php echo 'nombres de visites : '. $nbvisites; ?></label><br>
        <input type="submit" value="Reset" name="reset"><br>
        <input type="submit" value="Actualisation" name="actual">
    </form>
</body>
</html>