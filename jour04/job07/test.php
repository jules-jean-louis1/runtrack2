<!-- left="/"
right="\\"
base = '__'

for i in range(hauteur):
    print((hauteur-i) *" " + left + ((i*2) * ' ')+ right)
    if i == hauteur -1:
        print(left + base * hauteur + right)
 -->


<?php
$left = "/";
$right = "\\";
$base = "_";

$size = 5;

for ($i=0; $i <= $size ; $i++) { 
    print(($size-$i)*' '+$left+(($i*2)*' ')+$right);
    if ($i === $size-1) {
        print($left+$base*$size+$right);
    }
}



?>
