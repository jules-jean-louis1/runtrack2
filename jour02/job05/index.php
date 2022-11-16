<!-- Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
à la ligne entre chaque nombre (“<br />”). -->



<?php
$mile = '2000';

for ($i = 2; $i <= $mile/2; $i++)
  {
      if ($mile % $i === 0){
          echo " ";
      {elseif ($mile % 5 === 0)
        echo " ";
    }
      } else
      echo $i;
      echo "<br>";
}

?>