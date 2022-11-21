<?php
    echo 'Les choses que l\'on possède finissent par nous posséder.<br><br>';

    $str="Les choses que l'on possède finissent par nous posséder.";
    $count = 0;
    for ($i=0; isset($str[$i]); $i++) {
        $count++;
    }
    for ($j=$count-1; $j >= 0; $j--) { 
        echo $str[$j];
    }
?>