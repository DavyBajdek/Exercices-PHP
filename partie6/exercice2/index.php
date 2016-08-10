<p>
  <?php
  //On va tester les variables.
  if (isset($_GET['age'])){
  //Si la variable age existe, il affichera Bonjour,...
  echo 'Bonjour'.' '. $_GET['prenom'] . ' ' . $_GET['nom']. '!'.' '.'tu as'.' '.$_GET['age']. ' '. 'ans' ;
  }
  //Sinon afficher vous n'avez pas renseigné le nombre de semaines.
  else{
  echo "Vous n'avez pas renseigné l'âge !";
  }
?>
</p>
