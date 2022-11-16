<?php
for ($i = 2; $i <= 1000; $i++)
{
    if ($i % 5 === 0) {
        $i++;
    }
    else if($i % 2 == 0){
        $i++;
    }
    else {
        echo $i;
    }
echo "</br>";
}