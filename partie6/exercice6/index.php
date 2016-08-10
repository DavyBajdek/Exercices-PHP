<p>
  <?php
  //On va tester les variables
  if (isset($_GET['batiment']) AND isset($_GET['salle'])){
  //Si la variable salle et batiment existe, il les affichera.
  echo 'batiment =' . $_GET['batiment'];
  echo 'salle =' . $_GET['salle'];
  }
  //Sinon afficher vous n'avez pas renseigné les dates
  else{
  echo "Vous n'avez pas renseigné correctement l'emplacement de la salle !";
  }

?>
</p>
