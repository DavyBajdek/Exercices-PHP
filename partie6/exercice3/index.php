<p>
  <?php
  //On va tester les variables
  if (isset($_GET['dateDebut']) AND isset($_GET['dateFIn'])){
  //Si la variable age existe, il affichera Bonjour,...
    echo 'dateDebut =' . $_GET['dateDebut'] . ' ' .'dateFin = ' . $_GET['dateFin'];
  }
  //Sinon afficher vous n'avez pas renseigné les dates
  else{
    echo "Vous n'avez pas renseigné correctement les dates  !";
  }

?>
</p>
