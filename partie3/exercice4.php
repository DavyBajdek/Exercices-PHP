<?php
//On fait une boucle for avec comme paramètre la valeur d'init à 1, la valeur de fin à 10 et
$init = 1;
while ($init <= 10){
    //On fait l'incrémentation de 1/2 de $init
    echo "init=". " ".$init."<br>";
    $init += ($init/2); //On peut aussi l'écrire comme ça : $init = $init + $init/2
    //On affiche le $init
}
?>
