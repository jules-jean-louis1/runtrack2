<?php

$cpt_post = '0';

for ($i=0;insset($_POST[$i]);$i++){
    $cpt_post+=1;
}
echo $cpt_post;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Nom: <input type="text" name="nom" /><br />
        Prénom: <input type="text" name="prenom" /><br />
        <input type="submit" value="OK" />
    </form>
</body>
</html>