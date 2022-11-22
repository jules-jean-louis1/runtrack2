<!--Créez une fonction nommée “bonjour($jour)”.
    Cette fonction prend en paramètre un booléen nommé “$jour”.
    ● Si le paramètre “$jour” vaut true, la fonction doit afficher : “Bonjour”,
    ● Si le paramètre “$jour” vaut false, la fonction doit afficher : “Bonsoir”. -->

<?php

$bonj = true;               // definir si les booléen sont vrai ou faut pour pourvoir les passer en argument dans la fonction
$soir = false;

function bonjour($jour)     // fonction avec argument que l'on pourra remplacé 
{
    if ($jour === true) {   // Boucle pour déterminer si la fonction doit affiché "Bonjour" ou "bonsoir"
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

bonjour($bonj)
?>