<?php
session_start();
//Variables de session Nom, prénom & age
$_SESSION['prenom'] = 'Davy';
$_SESSION['nom'] = 'Bajdek';
$_SESSION['age'] = 19;
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
            <a href="page2.php">Page 2</a>
        </div>
    </body>
</html>
