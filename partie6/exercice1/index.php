<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 1 sur les URL</title>
  </head>
  <body>
    <?php
    //On vérifie que les champs noms et prénoms existent bien.
      if (isset($_GET['prenom']) && ($_GET['nom'])){
        echo 'Bonjour'. ' ' . $_GET['prenom'] . ' ' . $_GET['nom'];
     }
     //Si ils n'existent pas, afficher vous n'avez pas correctement saisi votre nom et votre prénom.
     else{
        echo 'Veuillez saisir correctement votre nom et votre prénom';
     }
    ?>
  </body>
</html>
