<?php
// Job 6 : Afficher un rectangle de 20 de largeur et 10 de hauteur

// Définition des dimensions du rectangle
$largeur = 20; // Largeur du rectangle
$hauteur = 10; // Hauteur du rectangle

// Boucle pour la hauteur du rectangle
for ($i = 0; $i < $hauteur; $i++) {
    // Afficher une ligne du rectangle (composée de $largeur astérisques)
    for ($j = 0; $j < $largeur; $j++) {
        echo "*"; // Affiche un astérisque pour chaque colonne de la ligne
    }
    
    // Retour à la ligne après chaque ligne du rectangle
    echo "<br />";
}
?>
