<?php

//Déclaration des tableau
$tableau = array();

$tableausansdouble = array();

$longueur_tab = (int) readline ("Donnez taille(Longueur)du tableau : ");


for($i = 0; $i <  $longueur_tab ; $i++) {

    $tableau [$i] = (int) readline ("Veuillez entrer les entiers : ");

}


echo ("Affichage du tableau");
 print_r ($tableau);
 $tableausansdouble = array_unique ($tableau);
echo "Le tableau sans double est de :" ;
 print_r ($tableausansdouble);
 





?>