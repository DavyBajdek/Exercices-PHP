<?php
session_start();
//Affichage des variables prénom, nom et age.
echo '<div class="border">' . 'Bonjour, ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ', vous avez'. ' ' . $_SESSION['age'] . ' ' .  'ans.' .'</div>'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="../exercice1/style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 2 Les variables superglobales</title>
    </head>
    <body>
        <div class="border">
            <a href="exercice2.php">Retour à la page précédente</a>
        </div>
    </body>
</html>
        

