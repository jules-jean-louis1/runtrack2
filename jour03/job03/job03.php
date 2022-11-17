<?php
$voyelles = ["a","e","i","o","u","y","I",];

$str = "I'm sorry Dave I'm afraid I can't do that";

for ($i=0; isset($str[$i]); $i++){
    foreach($voyelles as $val){
        if($str[$i]=== $val){
            echo $str[$i];
        }
    }  
}
?>