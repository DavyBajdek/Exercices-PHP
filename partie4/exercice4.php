<?php
//On crée une fonction qui prend deux nombres en paramètre.
$nombre = 860;
$nombre1 = 86.5;
//On crée une fonction qui prend ces deux nombres en paramètre.
function verifnombres($nbr, $nbr1){
  $message = "";
//Si le premier nombre est plus petit, on va retourner "Le premier nombre est plus petit".
  if ($nbr < $nbr1){
//Déclarer une variable message pour simplifier la fonction.
    $message = "Le premier nombre est plus petit";
  }
//Si le premier nombre est plus grand, on va retourner "Le premier nombre est plus grand".
  else if ($nbr > $nbr1){
    $message = "Le premier nombre est plus grand";
  }
//Si les deux nombres sont identiques, on va retourner "Les deux nombres sont identiques".
  else{
    $message = "Les deux nombres sont identiques";
  }
  return $message;
}
//On va juste vérifier que la fonction retrourne bien ce qu'on lui demande.
echo verifnombres($nombre, $nombre1);
?>
