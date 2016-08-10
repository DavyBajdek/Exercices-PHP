<?php
//Créer deux variables age et genre. La variable genre peut prendre comme valeur :
$genre = "Femme";
$age = 17;
//    En fonction de l'âge et du genre afficher la phrase correspondante :
//    Vous êtes un homme et vous êtes majeur
if ($genre === "Homme" && $age >= 18){
    echo "Vous êtes un homme et vous êtes majeur";
} 
//    Vous êtes un homme et vous êtes mineur
else if ($genre == "Homme" && $age <= 18){
    echo"Vous êtes un homme et vous êtes mineur";
} 
//    Vous êtes une femme et vous êtes majeur
else if ($genre == "Femme" && $age >= 18){
    echo "Vous êtes une femme et vous êtes majeur";
} 
//    Vous êtes une femme et vous êtes mineur
else if (genre == "Femme" && $age <= 18){
    echo "Vous êtes une femme et vous êtes mineure";
}
else{
    echo "Vous n'êtes pas humain ! #";
}
?>