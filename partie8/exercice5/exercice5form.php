<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5 Les variables superglobales</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--Création d'un formulaire avec la méthode GET qui renvoie les données vers user.php-->
        <div class="border">
            <form action="exercice5.php" method="post">
                <!-- Création de deux champs nom d'utilisateur et mot de passe-->
                <label for="nom">* Nom d'utilisateur</label> : <input type="text" name="name" id="nom" /><br/>
                <label for="prenom">* Mot de passe</label> : <input type="password" name="password" id="prenom" /><br/>
                <button type="submit" value="OK">OK</button>
            </form>
        </div>
    </body>
</html>

