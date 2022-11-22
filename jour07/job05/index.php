<!-- Job 05
    Créez une fonction nommée “occurrences($str, $char)”.
    Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un
    caractère nommé “$char”.
    Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.
    Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans
    $str sera : 2 -->

<?php

function occurrences($str, $char)
{
    $char = '0';
    $alpha0 = 
    [
        'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
        'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
    ];

    for ($i=0; isset($str[$i]) ; $i++) { 
        foreach ($alpha0 as $char) {
            if ($str[$i] === $alpha0) {
                $char+=1;
            }
        }
    }
    return $char;
}

$str = "Bonjour";

echo (occurrences($str, $char))
?>