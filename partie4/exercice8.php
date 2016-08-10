<?php
//Déclaration de 3 variables nombres.
$nombre1 = 5;
$nombre2 = 5;
$nombre3 = 5;
//Création d'une fonction calcul qui va additionner ces 3 nombres.
function Calcul($nombre = 0, $nombre1 = 0, $nombre2 = 0){
//Il faut à tout prix initialiser les variables pour sécuriser sa fonction.
//Au cas ou une variable n'existe pas pour qu'il n'y-ait pas d'erreurs
//Calcul de la somme des 3 nombres.
  return ($nombre + $nombre1 + $nombre2);
}
//Afficher la fonction Calcul
echo Calcul($nombre3, $nombre1, $nombre2);
?>
