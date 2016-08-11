<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5 Les variables superglobales</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="border">
        <h1>Modifier vos informations :</h1>
            <form action="exercice5.php" method="post">
                <!-- Création de deux champs nom d'utilisateur et mot de passe-->
                <label for="nom">* Nom d'utilisateur</label> : <input type="text" name="name" id="nom" /><br/>
                <label for="prenom">* Mot de passe</label> : <input type="password" name="password" id="prenom" /><br/>
                <button type="submit" value="OK">OK</button>
            </form>
        </div>
        <?php
        //Si les variables name et password du tableau $_POST existent :
        if (isset($_POST['name']) && isset($_POST['password'])) {
            //Stocker la variable user et password dans le tableau $_cookie
            $_COOKIE['User'] = $_POST['name'];
            $_COOKIE['Password'] = $_POST['password'];
            //Affichage du nom d'utilisateur et du mot de passe par le biais du tableau cookie.
            echo '<div class="border"> Bonjour ' . $_COOKIE['User'] . ' ' . 'Vous avez défini le mot de passe suivant :' . ' ' . $_COOKIE['Password'] . '</div>';
        } else {
            echo '<div class="border"> Bonjour . ' . 'Veuillez saisir correctement votre nom d\'utilisateur et votre mot de passe.</div>';
        }
        ?>
    </body>
</html> 
