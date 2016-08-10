<?php
//On crée la première variable égale à 0.
$calcul = 0;
//On crée la seconde variable avec un compris entre 0 et 100.
$calcul1 = 3;

//Tant que la variable n'est pas supérieure à 20, on va multiplier la première variable avec la deuxième.
while ($calcul < 20)
{
    // On va afficher le résultat de cette première variable qui est égale à la multiplication des 2 variables.
    $multipl = ($calcul * $calcul1);
    //On va afficher le résultat de cette variable.
    echo "calcul = $multipl <br>" ;
    // On va enfin incrémenter cette variable.
    $calcul++;
}
?>
