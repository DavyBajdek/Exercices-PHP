<?php
//On crée une variable de type string.
$chaine = "Voici une chaîne";
//On crée une deuxième chaine de caractère.
$chaine1 = "Voici une autre chaîne";
//On crée une fonction qui va retourner cette même chaîne de caractère.
function chainedecaractere($variable, $variable1){
//On retourne ces deux chaînes de caractères.
  return $variable . "<br>". $variable1;
}
//Le echo sert à vérifier que la fonction retourne bien deux chaines concaténées
echo chainedecaractere($chaine, $chaine1);
?>
