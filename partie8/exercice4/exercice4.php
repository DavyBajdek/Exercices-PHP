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
    if (isset($_POST['name']) && isset($_POST['password'])){
    //Stocker la variable user et password dans le tableau $_cookie
    $_COOKIE['User'] = $_POST['name']; 
    $_COOKIE['Password'] = $_POST['password']; 
    //Affichage du nom d'utilisateur et du mot de passe par le biais du tableau cookie.
    echo '<div class="border">Bonjour, ' . $_COOKIE['User'] . ' ' . 'Vous avez défini le mot de passe suivant :' . ' ' . $_COOKIE['Password'] . '</div>';
    }
    else{
        echo '<div class="border"> Bonjour  ' . 'Veuillez saisir correctement votre nom d\'utilisateur et votre mot de passe.'.'</div>';
    }
    ?>
      
  </body>
</html>