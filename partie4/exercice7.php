<?php
/*Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :
    Homme
    Femme
    La fonction doit renvoyer en fonction des paramètres :
    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur
    Gérer tous les cas.
*/
$age = 14;
$genre = 'homme';
function sexe($age , $genre){//fonction 'sexe' avec deux parametres
  if($age<18 && $genre == 'homme')//si $age est inférieur a 18 et $genre est homme
{
  return 'vous etes un homme et vous etes mineur';//on retourne cette phrase
}
elseif($age>=18 && $genre == 'femme')//sinon si $age est supérieur ou égal a 18 et $genre est femme
{
  return 'vous etes une femme et vous etes majeur';
}
elseif($age >=18 && $genre == 'homme')
{
return 'vous etes un homme et vous etes majeur';
}
elseif($age > 18 && $genre == 'homme' )
{
  return 'vous etes une femme et vous etes mineur';
}
else{
  return 'vous etes hors catégorie';//on retourne tout les autres cas
}
}
echo sexe($age , $genre);
 ?>
