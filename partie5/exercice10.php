<?php
//Créer un tableau associatif.
$departementsliste = array(
  '60' => 'Oise',
  '02' => 'Aisne',
  '59' => 'Nord',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme');
//Créer une boucle foreach qui va parcourir le tableau departements en affichant la cle et l'élément.
foreach($departementsliste as $numerodep => $nomdep){
//Affficher le numéro du département vaut nom du département.
    echo 'Le département suivant : ' . $numerodep .'  a le nom ' . $nomdep . '.<br/>';
}
?>
