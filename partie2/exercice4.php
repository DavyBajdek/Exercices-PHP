<?php 
// L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
//Créer une variable magnitude. 
$magnitude = 6;
//Selon la valeur de magnitude, afficher la phrase correspondante.
switch ($magnitude) // on indique sur quelle variable on travaille
{ 
    case 1: // dans le cas où $note vaut 5
    //Le default est obligatoire, c'est la valeur par défaut 
    default:
        echo "Micro-séisme impossible à ressentir.";
    break;
    
    case 2: // dans le cas où $note vaut 7
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres";
    break;
    
    case 3: // etc. etc.
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
    break;
    
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
    break;
    
    case 5:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;
    
    case 6:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break;
    case 7:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;
    
    case 8:
        echo "Séisme capable de tout détruire sur une très vaste zone.";
}

?>