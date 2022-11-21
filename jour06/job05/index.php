<?php

$styl1 = 'styles1.php';
if (isset($_POST['envoyer'])) {
    if (isset($_GET[''])) {
        echo "o";
    } 
    
} 



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.php">
    <title>Jour06</title>
</head>
<body>
    <main>
        <form action="index.php" method="post" class="form-example">
            <select name="color">
                <option id="btn1" value="style1" name="sty1">Azure</option>
                <option id="btn2" value="style2" name="sty2">Green</option>
                <option id="btn3" value="style3" name="sty3">Black</option>
                <option id="btn4" value="style4" name="sty4">Brown</option>
                <input type="submit" value="valid" name="envoyer"><br />
            </select> <br /> <br /> 
        </form>
    </main>
</body>
</html>