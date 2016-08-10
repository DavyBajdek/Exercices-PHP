<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 7 Les formulaires</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        //Si les champs sont bien remplis, on va afficher Bonjour + genre + nom + prénom
        if (isset($_POST['prenom']) && isset($_POST['nom']) && $_POST['prenom'] != NULL && $_POST['nom'] != NULL) {
            $infosfichierPDF = pathinfo($_FILES['fichierPDF']['name']);
            $extension_upload = $infosfichierPDF['extension'];
            echo 'Bonjour, ' . htmlspecialchars($_POST['genre']) . ' ' . htmlspecialchars($_POST['prenom']) . ' ' . htmlspecialchars($_POST['nom']);
            echo '</br>' . 'Le fichier sélectionné est le suivant : ' . ($_FILES['fichierPDF']['name']) . '<br/>';
            echo $extension_upload;
        } else {
            ?>  
            <!--Sinon, afficher le formulaire pour que l'utilisateur puisse entrer ses coordonnées.-->
            <div class="form">
                <h1 class="contacttitle">Formulaire de contact</h1>
                <form action="exercice7.php" method="post" enctype="multipart/form-data">
                    <div class="civil" ><select classe="mr" name="genre">
                            <option>Mr.</option>
                            <option>Mme.</option>
                        </select><br/><br/></div>
                    <label class="namelabel" for="nom">* Nom</label> : <input class="name" type="text" name="nom" id="nom" placeholder="Dupont"/><br/>   
                    <label class="firstnamelabel" for="prenom">* Prénom</label> : <input type="text" name="prenom" placeholder="Jean"/><br/>
                    <p class="filePDF">Séléctionnez un fichier au format P.D.F.</p><input class="inputfile" name="fichierPDF" type="file"></input><br/><input class="submit" type="submit" value="Envoyer le fichier" /></p>
                    <button class="submit" type="submit" value="OK">Envoyer</button>
                </form>
                <p class="obligatory"> Veuillez entrer vos coordonnées, assurez vous de bien remplir tous les champs précédés de *.</p>
            </div>
            <?php
        }
        //Erreurs de transfert d'un fichier
        //Tester si le fichier a bien été envoyé et s'il il n'y pas d'erreurs.
        ?>
    </body>
</html>