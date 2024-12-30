<?php
// Job 7 : Afficher un triangle de 5 de hauteur

// Définir la hauteur du triangle
$hauteur = 5; // La hauteur du triangle, modifiable facilement

// Boucle pour afficher chaque ligne du triangle
for ($i = 1; $i <= $hauteur; $i++) {
    // Pour chaque ligne, afficher $i étoiles
    for ($j = 1; $j <= $i; $j++) {
        echo "*"; // Affiche une étoile
    }
    // Retour à la ligne après chaque ligne du triangle
    echo "<br />";
}
?>
