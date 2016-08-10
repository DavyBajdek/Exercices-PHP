<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 4 Les formulaires</title>
  </head>
  <body>
    <!--Création d'un formulaire avec la méthode POST qui renvoie les données vers user.php-->
    <form action="user.php" method="post">
    <!-- Création de deux champs nom et prénom de type text-->
      <label for="nom">Votre nom : </label><input type="text" name="nom" id="nom" />
      <label for="prenom">Votre prénom : </label><input type="text" name="prenom" id="prenom" />
      <input type="submit" value="OK"/>
    </form>
  </body>
</html>

