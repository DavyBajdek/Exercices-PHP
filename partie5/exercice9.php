<?php
//Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.
//Créer un tableau associatif.
$departementslist = array(
//Créer les éléments du tableau avec comme clé le numéro de département et comme valeur leur nom.
  '60' => 'Oise',
  '02' => 'Aisne',
  '59' => 'Nord',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme');
//Faire une boucle foreach pour parcourir le tableau associatif.
foreach ($departementslist as $departements){
//Afficher le tableau département avec toutes ses valeurs.
    echo $departements . "<br/>";
}
?>
