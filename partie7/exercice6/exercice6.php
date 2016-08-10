<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../exercice7/style.css" rel="stylesheet" type="text/css"/>
        <title>Exercice 6 Les formulaires</title>
    </head>
    <body>

        <p>
            <?php
            //Si les champs sont bien remplis, on va afficher Bonjour + genre + nom + prénom
            if (isset($_POST['prenom']) && isset($_POST['nom']) && $_POST['prenom'] != NULL && $_POST['nom'] != NULL && isset($_POST['genre'])) {
                echo 'Bonjour, ' . htmlspecialchars($_POST['genre']) . ' ' . htmlspecialchars($_POST['prenom']) . ' ' . htmlspecialchars($_POST['nom']);
            } else {
                ?>  
            <!--Sinon, afficher le formulaire pour que l'utilisateur puisse entrer ses coordonnées.-->
            <div class="form">
            <h1 class="contacttitle">Formulaire de contact</h1>
                <form action="exercice6.php" method="post" enctype="multipart/form-data">
                            <div class="civil" ><select classe="mr" name="genre">
                                <option>Mr.</option>
                                <option>Mme.</option>
                            </select><br/><br/></div>
                            <label class="namelabel" for="nom">* Nom</label> : <input class="name" type="text" name="nom" id="nom" placeholder="Dupont"/><br/>   
                            <label class="firstnamelabel" for="prenom">* Prénom</label> : <input type="text" name="prenom" placeholder="Jean"/><br/>
                            <button class="submit" type="submit" value="OK">Envoyer</button>
                      </form>
                      <p class="obligatory"> Veuillez entrer vos coordonnées, assurez vous de bien remplir tous les champs précédés de *.</p>
            </div>
        <!--Afficher un message pour dire à l'utilisateur qu'il remplisse correctement tous les champs.-->
        <?php
        }
        ?>
    </p>
</body>
</html>