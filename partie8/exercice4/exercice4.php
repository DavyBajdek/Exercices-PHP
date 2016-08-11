<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 4 Les variables superglobales</title>
    <link href="../exercice1/style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <?php
//Si les variables name et password du tableau $_POST existent :
    if (isset($_COOKIE['name']) && isset($_COOKIE['password'])){
//Stocker la variable user et password dans le tableau $_cookie
//Afficher le nom d'utilisateur et du mot de passe par le biais du tableau cookie.
    echo 'Bonjour, ' . $_COOKIE['name'] . ' ' . 'Vous avez défini le mot de passe suivant :' . ' ' . $_COOKIE['password'];
    }
    else{
        echo '<div class="border"> Bonjour ' . '<br/>' . 'Veuillez saisir correctement votre nom d\'utilisateur et votre mot de passe.'.'</div>';
    }
    ?>
      
  </body>
</html>