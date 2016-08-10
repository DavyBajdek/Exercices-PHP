<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 2 Les formulaires</title>
  </head>
  <body>
    <!--Création d'un formulaire avec la méthode POST qui renvoie les données vers l'index.php-->
    <form action="user.php" method="post">
    <!-- Création de deux champs nom et prénom de type text-->
      <label for="nom">Votre nom</label> : <input type="text" name="nom" id="nom" />
      <label for="prenom">Votre prénom</label> : <input type="text" name="prenom" id="prenom" />
      <button type="submit" value="OK">OK</button>
    </form>
  </body>
</html>
