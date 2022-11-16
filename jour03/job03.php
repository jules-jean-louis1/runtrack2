<?php
$voyelles = ["a","e","i","o","u","y",];

$str = "I'm sorry Dave I'm afraid I can't do that";

$chaine = str_replace($voyelles, "", $str);//Je retire les voyelles de ma chaine de départ
echo $chaine;