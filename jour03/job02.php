<!-- Créez une variable de type string nommée $str et affectez y le texte :
“Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
Parcourir cette chaîne en affichant seulement un caractère sur deux. -->


<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";

for ($i=0; isset($str[$i]); $i+=2){
  echo $str[$i];  
}

// $i+=2 pour passé 2 caractères