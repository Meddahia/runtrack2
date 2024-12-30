<?php
// Job 01: Afficher les nombres de 0 à 1337
// Pour chaque nombre, un retour à la ligne est ajouté
// Le nombre 42 doit être en gras et souligné

// Boucle de 0 à 1337
for ($i = 0; $i <= 1337; $i++) {
    // Si le nombre est 42, je l'affiche en gras et souligné
    if ($i == 42) {
        echo "<b><u>" . $i . "</u></b><br />";
    } else {
        // Sinon, je l'affiche normalement avec un retour à la ligne
        echo $i . "<br />";
    }
}
?>

