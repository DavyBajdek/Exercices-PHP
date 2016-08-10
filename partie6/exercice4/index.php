<p>
  <?php
  //On va tester les variables
  if (isset($_GET['langage']) AND isset($_GET['serveur'])){
  //Si la variable age existe, il affichera Bonjour,...
  echo 'langage =' . $_GET['langage'] . ' ' .'serveur = ' . $_GET['serveur'];
  }
  //Sinon afficher vous n'avez pas renseigné le langage utilisés
  else{
  echo "Vous n'avez pas renseigné correctement le langage ou le serveur utilisé  !";
  }

?>
</p>
