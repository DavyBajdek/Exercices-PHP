<?php
//Stocker le nom et le mot de passe dans un cookie.
if (isset($_POST['name']) && isset($_POST['password'])) {
//Avec la fonction setcookie(), créer 2 cookies qui resteront 1 an en mémoire.
    setcookie('name', $_POST['name'], time() + 365 * 24 * 3600, '/', null, false, true);
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/', null, false, true);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 3 Les variables superglobales</title>
    </head>
    <body>
        <!--Création d'un formulaire avec la méthode GET qui renvoie les données vers user.php-->
        <form action="exercice3.php" method="post">
            <!-- Création de deux champs nom d'utilisateur et mot de passe-->
            <div class="form">
                <label for="name">* Nom d'utilisateur : </label><input type="text" name="name"/><br/>
                <label for="password">* Mot de passe : </label><input type="password" name="password"/><br/>
                <button type="submit" value="OK">OK</button>
            </div>
        </form>
    </body>
</html>
