<!-- <?php

/* $haut = $_GET['hauteur'];
$largeur = $_GET['largeur'];
echo $largeur;
echo $haut  ; */


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
</html> -->
<?php
    // pyramid star pattern
    $size = 5;
    for($i = 0; $i < $size; $i++) {
        // print spaces
        for($j = 0; $j < $size - $i - 1; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // print stars
        for($k = 0; $k < 2 * $i + 1; $k++) {
            if($i === 0 || $i === $size - 1) {
                echo "*";
            }
            else {
                if($k === 0 || $k === 2 * $i) {
                    echo "*";
                }
                else {
                    echo "&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
    // hollow square pattern
    $size = 5;
    for($i = 0; $i < $size; $i++) {
        // print column
        for($j = 0; $j < $size; $j++) {
            // print only star in first and last row
            if($i === 0 || $i === $size - 1) {
                echo "*";
            }
            else {
                // print star only in first and last position row
                if($j === 0 || $j === $size - 1) {
                    echo "*";
                }
                else {
                    // use &nbsp; for space
                    echo "&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
?>