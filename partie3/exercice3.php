<?php
//Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
$initialisation = 100; 
$nombre = 100; 
//Tant que la première variable n'est pas inférieure ou égale à 10 :
while ($initialisation >= 10){
//multiplier la première variable avec la deuxième et stocker le résultat dans la variable multiplication
$multiplication = $initialisation * $nombre; 
//afficher le résultat
    echo "$multiplication <br>"; 
//    décrémenter la première variable
    $initialisation--;
}
?>