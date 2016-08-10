<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 1 Les variables superglobales</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        //Afficher l'User Agent.
        echo '<div class="border">Vous utilisez ' . ' ' . $_SERVER['HTTP_USER_AGENT'] . '<br/>';
        //Afficher l'adresse IP.
        echo '<br/> Votre adresse IP est la suivante :' . ' ' . $_SERVER['REMOTE_ADDR'] . '<br/>';
        //Afficher le nom du serveur.
        echo '<br/> Votre serveur est la suivant :' . ' ' . $_SERVER['SERVER_NAME'] . '</div>';
        ?>
    </body>
</html>