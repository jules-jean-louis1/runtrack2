<?php
$tableau1 = [
    200,
    204,
    173,
    98,
    171,
    404,
    459,
];
foreach ($tableau1  as $val){
  if ($val %2 === 0){
   echo $val . ' ' . 'Ce nombre est pair';
  }else{
   echo $val . ' ' . 'Ce nombre est inpair';
  }
  echo "</br>";
}

?>