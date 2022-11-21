<!-- Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
à la ligne entre chaque nombre (“<br />”). -->



<?php

/* for ($i=2; $i <= 1000 ; $i++) { 
    if ($i % 2 === 0) {
    } elseif ($i/3 and $i/4 and $i/5) {
        echo $i;
    } 
} */

echo '<br>Nombres premiers de 0 à 1000 :<br> ';
for ($i = 1; $i <= 1000; $i++) {

    for ($j = 2; $j < $i; $j++) {
        //test du quotien de la division
        if ($i % $j == 0) {
            break;
        }
        else if ($j === $i-1) {
            echo "$i<br />";
        }

    }
}
?>