<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 5 Les formulaires</title>
  </head>
  <body>
    <!--Création d'un formulaire avec la méthode POST qui renvoie les données vers user.php-->
    <form action="exercice5.php" method="post">
    <!-- Création de deux champs nom et prénom de type text-->
    <select name="genre">
        <option>Mr.</option>
        <option>Mme.</option>
    </select>
      <label for="nom">Votre nom : </label><input type="text" name="nom" id="nom" />
      <label for="prenom">Votre prénom : </label><input type="text" name="prenom" id="prenom" />
      <input type="submit" value="OK"/>
    </form>
        <?php
        if (isset($_POST['prenom'])&&isset($_POST['nom']) && isset($_POST['genre']) && $_POST['prenom'] != NULL && $_POST['genre'] != NULL && $_POST['nom'] != NULL){
            echo 'Bonjour, ' . htmlspecialchars($_POST['genre']).' '. htmlspecialchars($_POST['prenom']) . ' ' . htmlspecialchars($_POST['nom']);
        }
        else {
            echo 'Vous n\'avez pas correctement renseigné le formulaire !';
        }
        ?>  
  </body>
</html>
