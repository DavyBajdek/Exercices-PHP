<?php
//On crée deux variables, une chaîne de caractères et un nombre
$chaine = "chaîne de caractères.";
$nombre = 1;
//On crée une fonction qui prend en paramètres ces deux variables.
function concat($nombre, $chaine){
//On retourne la concaténation de ces deux variables.
  return $nombre. "\n" .$chaine;
}
//On affiche donc le retour de cette fonction, soit la concaténation.
echo concat($nombre, $chaine);
?>
