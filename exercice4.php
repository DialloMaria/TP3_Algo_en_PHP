<?php

// Fonction pour compter les voyelles dans une chaîne de caractères
function compterVoyelles($chaine) {
    // Déclaration du tableau des voyelles
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
    
    // Compter les voyelles dans la chaîne
    return count(array_intersect(str_split($chaine), $voyelles));
}

// Tableau de chaînes de caractères
$tableau = ["Mariama", "Hapsatou", "Cheikh Tidiane", "Fatou Bintou"];

// Parcourir le tableau et compter les voyelles pour chaque chaîne
foreach ($tableau as $chaine) {
    echo "Nombre de voyelles '\n' dans  \"$chaine\" : " . compterVoyelles($chaine);
}
?>


 











