<?php

if($_GET['nombre'] % 2 ===0){
    echo $_GET['nombre'] . ' ' . "est un nombre pair";
}else{
    echo $_GET['nombre'] . ' ' . "est un nombre impair";
}

?>




<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job06</title>
</head>
<body>
    <main>
        <form action="index.php" method="get">
            <input type="number" name="nombre">
            <input type="submit" value="Entrer">
        </form>
    </main>
</body>
</html>