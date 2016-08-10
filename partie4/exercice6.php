<?php
//"Bonjour" + nom + prenom + ",tu as" + age + "ans".
//On crée trois variables nom, prénom et age.
$nom = "BAJDEK";
$prenom = "Davy";
$age = 19;
//On crée une fonction qui prend en paramtères le nom, le prénom et l'âge.
function bonjour($name, $firstName, $age){
  return "Bonjour". "\n". $name."\n". $firstName. "\n". ", tu as"."\n". $age. "ans.";
}
echo bonjour($nom, $prenom, $age);
?>
