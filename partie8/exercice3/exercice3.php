<?php
if (isset($_POST['nom']) && isset($_POST['password'])){
    setcookie('nom', $_POST['nom'], time() + 3600, null, null, false, true);
    setcookie('password', $_POST['password'], time() + 3600, null, null, false, true);
    echo 'Bonjour' . ' ' . $_POST['nom'];
    echo ' ' . 'Vous avez défini le mot de passe suivant : ' . $_POST['password'];
}
else{
    echo 'Merci de renseigner correctement les champs.';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 3 Les variables superglobales</title>
        <link href="../../partie7/exercice7/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--Création d'un formulaire avec la méthode GET qui renvoie les données vers user.php-->
        <form action="exercice3.php" method="post">
            <!-- Création de deux champs nom d'utilisateur et mot de passe-->
            <div class="form">
                <label for="user">* Nom d'utilisateur : </label><input type="text" name="nom"/><br/>
                <label for="password">* Mot de passe : </label><input type="password" name="password"/><br/>
                <button type="submit" value="OK">OK</button>
            </div>
        </form>
<?php
}
?>
    </body>
</html>
