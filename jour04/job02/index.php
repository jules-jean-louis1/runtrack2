<?php

foreach($_GET as $arguments => $valeurs){
    echo "Key: $arguments Val: $valeurs<br>"; 
}
?>

<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>TEF: Formulaire</title>
</head>
<body>
    <p>Veuillez vous identifier</p>
    <form action="index.php">
        Nom: <input type="text" name="nom" /><br />
        Prénom: <input type="text" name="prenom" /><br />
        <input type="submit" value="OK" />
    </form>
    <section>
        <table class="demo">
            <caption>Tableau 1</caption>
            <thead>
            <tr>
                <th>Arguments</th>
                <th>Valeurs<br></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Prénom<br></td>
                <td><?php echo $_GET['prenom'];?></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><?php echo $_GET['nom'];?></td>
            </tr>
            </tbody>
        </table>
    </section>
</body>
</html>