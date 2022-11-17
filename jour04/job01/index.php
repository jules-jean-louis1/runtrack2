<?php

if (isset($_GET['nom'])){
    echo $_GET['nom'];
}else{
    echo "Le champ Nom n'est pas remplie";
}
if (isset($_GET['prenom'])){
    echo $_GET['prenom'];
}else{
    echo "Le champ Nom n'est pas remplie";
}
?>

<html>
<head>
    <title>TEF: Formulaire</title>
</head>
<body>
    <p>Veuillez vous identifier</p>
    <form action="index.php" method="get">
        Nom: <input type="text" name="nom" /><br />
        Prénom: <input type="text" name="prenom" /><br />
        <input type="submit" value="OK" />
    </form>
</body>
</html>