<!-- Job 02
    Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
    Afficher le contenu du cookie.
    Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php

if (isset($_POST['reset'])){
    $nbvisites = 1;
    setcookie("visites", $nbvisites);
}
if (!isset($_COOKIE['visites'])) {  
    $nbvisites = 1;
    setcookie("visites", $nbvisites);
    }else{
        $nbvisites = ++$_COOKIE['visites'];
        setcookie("visites", $nbvisites);  
    }

?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job02</title>
</head>
<body>
    <form action="" name="cookie" method="post">
        <label for="nbvs"><?php echo 'nombres de visites : '. $nbvisites; ?></label><br>
        <input type="submit" value="Reset" name="reset"><br>
    </form>
</body>
</html>