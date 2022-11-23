<?php

$str = "Lorsque vous validez le formulaire, vous devez appliquer des transformations";
function styletext()
{
    
}
if (isset($_POST['envoyer'])) {
    if (!empty($_POST['style'])) {
        $selected = $_POST['style'];
        if ($selected === $_POST['maj']) {
            echo "<b>". $str ."</b>";   
        }
    }else {
        echo "Sélectionné un style";
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job07</title>
</head>
<body>
    <main>
        <form action="" method="POST">
            <select name="style" id="">
                <option value="chosir style"></option>
                <option value="Gras">Gras</option>
                <option value="Majuscule" name="maj">Majuscule</option>
                <option value="Souligner" name="abc">Souligner</option>
            </select>
            <input type="submit" value="choisir" name="envoyer">
        </form>
    </main>
</body>
</html>

