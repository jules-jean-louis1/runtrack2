<!-- Job 04
    Créez une fonction nommée “calcule()” qui prend 3 paramètres :
    ● le premier, “$a”, est un nombre,
    ● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
    (+, -, *, /, %),
    ● le troisième, “$b”, est un nombre.
    La fonction doit retourner le résultat de l’opération. -->

    <!-- return $a. ' * ' .$b. ' = ' .$a * $b. '<br>'; -->

<?php

function calcule(float $a, $operation, float $b)
{
    if ($operation === 'x') {
       echo $a. '*' .$b. ' = ' .$a * $b. '<br>'; 
    } elseif ($operation === '+') {
        echo $a. '+' .$b. ' = ' .$a + $b. '<br>';
    } elseif ($operation === '-') {
        echo $a. '-' .$b. ' = ' .$a - $b. '<br>';
    } elseif ($operation === '/') {
        echo $a. '/' .$b. ' = ' .$a / $b. '<br>';
    } elseif ($operation === '%') {
        echo $a. '%' .$b. ' = ' .$a % $b. '<br>';
    } else {
        
    }
}

echo(calcule(4,'x',3)) 


// 

?>