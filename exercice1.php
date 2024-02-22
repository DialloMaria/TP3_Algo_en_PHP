<?php
// Tableau d'entiers
$tableau = array(2, 3, 4, 5);

// Initialisation du produit à 1
$produit = 1;

// Parcourir le tableau pour calculer le produit
foreach ($tableau as $tableau) {
    $produit *= $tableau;
}

// Affichage du produit
echo "Le produit de tous les éléments du tableau est : $produit ";
?>
