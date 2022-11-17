<?php

$john = "John";
$rambo = "Rambo";

$user = $_POST['username'];
$pwd = $_POST['pwd'];

/* foreach($_POST as $key => $val){
    if ($key['username']===$john and $key ['pwd']===$rambo){
        echo "C'est pas ma guerre!";
    }elseif($key['username']===$john){
        echo "Votre pire cauchemar.";
    }
} */
    if ($user===$john and $pwd===$rambo){
        echo "C'est pas ma guerre!";
    }elseif($user===$john){
        echo "Votre pire cauchemar.";
    }




?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAMBO</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd">
        <input type="submit" value="OK" />
    </form>
</body>
</html>