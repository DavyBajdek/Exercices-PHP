<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vos coordonées :</title>
    </head>
    <body>
        <?php
        //Si les variables nom et prenom existent, on va afficher
        if (isset($_GET['prenom'])&&isset($_GET['nom']) && $_GET['prenom'] != NULL && $_GET['nom'] != NULL){
            echo 'Bonjour, ' . htmlspecialchars($_GET['prenom']) . ' ' . htmlspecialchars($_GET['nom']);
        }
        else {
            echo "Vous n'avez pas correctement renseigné le formulaire !";
        }
        ?>
    </body>
</html>