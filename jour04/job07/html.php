<?php

$haut = $_GET['hauteur'];
$largeur = $_GET['largeur'];
echo $largeur;
echo $haut  ; 


?>

<html lang="en">
<head>
    <title>Job07</title>
</head>
<body>
    <main>
        <form action="html.php" method="get">
            <input type="number" name="largeur" id="larg">
            <input type="number" name="hauteur" id="long">
            <input type="submit" value="OK">
        </form>
        <span>
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
            // carrre
            $size = 5;
            for($i = 0; $i < $size; $i++) {
                // affiché les colonnes
                for($j = 0; $j < $size; $j++) {
                    // n'afficher que la première et dernière colonnes a l'aide des index
                    if($i === 0 || $i === $size - 1) {
                        echo "*";
                    }
                    else {
                        // faire de même pour les rangs
                        if($j === 0 || $j === $size - 1) {
                            echo "*";
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
        </span>
    </main>
</body>
</html> 