<!-- Job 03
    Créez une fonction nommée “getHello()”.
    Cette fonction doit retourner “Hello LaPlateforme!”.
    Appelez cette fonction dans votre page en récupérant sa valeur de retour et affichez-la. -->

<?php


function gethello2()
{          
    return "Hello la plateforme!";                                                                                         
} 

echo(gethello2());

function gethello()
{
    $hello = "Hello la plateforme!";            // Il faut definir la variable que l'on veut retourner
    return $hello;                             // cela evite de devoir mettre un echo dans la fonction                                                                
}                                              //réutiliser le resultât de la fonction ailleur 

gethello()

?>