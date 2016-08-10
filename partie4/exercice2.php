<?php
//Créer une variable de type string
$chaine = "Voici une chaîne";
//Créer une fonction qui va retourner cette même chaîne de caractère
function chainedecaractere($variable){
//Retourner cette chaîne de caractères
  return $variable;
}
//Afficher cette fonction.
echo chainedecaractere($chaine);
//Le paramètre de fonction n'a de portée que dans la fonction.
?>
