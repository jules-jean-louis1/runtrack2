
<?php

$haut = $_GET['hauteur'];
$largeur = $_GET['largeur'];
$left = "/";
$right = "\\";
$base = "-";

$size = 5;
    // pyramid star pattern
    $size = 5;
    for($i = 0; $i < $largeur; $i++) {
        // print spaces
        for($j = 0; $j < $largeur - $i - 1; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // print stars
        for($k = 0; $k < 2 * $i + 1; $k++) {
            if($i === 0) {
                echo '';
            } if ( $i === $haut -1){
                echo $base;
            }
            else {
                if($k === 0 ) {
                    echo $left;
                } if($k === 2 * $i){
                    echo $right;
                }
                else {
                    echo "&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
    // carrre
    for($i = 0; $i < $haut; $i++) {
        // affiché les colonnes
        for($j = 0; $j < $haut; $j++) {
            // n'afficher que la première et dernière colonnes a l'aide des index
            if($i === 0 || $i === $largeur - 1) {
                echo "_";
            }
            else {
                // faire de même pour les rangs
                if($j === 0) {
                    echo "|";
                } if ($j === $haut - 1) {
                    echo "|";
                }
                else {
                    // use &nbsp; pour les espaces
                    echo "&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
?>


<html lang="en">
<head>
    <title>Job07</title>
</head>
<body>
    <main>
        <form action="index.php" method="get">
            <input type="number" name="largeur" id="larg">
            <input type="number" name="hauteur" id="long">
            <input type="submit" value="OK">
        </form>
    </main>
</body>
</html>