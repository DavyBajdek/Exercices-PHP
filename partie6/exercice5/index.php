<p>
  <?php
  //On va tester les variables
  if (isset($_GET['semaine'])){
  //Si la variable age existe, il affichera Bonjour,...
  echo 'langage =' . $_GET['semaine'];
  }
  //Sinon afficher vous n'avez pas renseigné les dates
  else{
  echo "Vous n'avez pas renseigné correctement renseigné le nombre de semaines !";
  }

?>
</p>
