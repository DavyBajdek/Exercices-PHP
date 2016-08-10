<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vos coordonées :</title>
    </head>
    <body>
        <?php
        if (isset($_POST['prenom'])&&isset($_POST['nom']) && isset($_POST['genre']) && $_POST['prenom'] != NULL && $_POST['genre'] != NULL && $_POST['nom'] != NULL){
            echo 'Bonjour, ' . htmlspecialchars($_POST['genre']).' '. htmlspecialchars($_POST['prenom']) . ' ' . htmlspecialchars($_POST['nom']);
        }
        else {
            echo "Vous n'avez pas correctement renseigné le formulaire !";
        }
        ?>  
    </body>
</html>
