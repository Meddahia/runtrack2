<?php
// Job 03: Afficher les nombres de 0 à 100
// Si le nombre est entre 0 et 20, je l'affiche en italique
// Si le nombre est entre 25 et 50, je l'affiche en souligné
// j'affiche "La Plateforme_" à la place du nombre 42

// Boucle de 0 à 100
for ($i = 0; $i <= 100; $i++) {
    // Si le nombre est 42, je l'affiche sous forme de texte "La Plateforme_"
    if ($i == 42) {
        echo "La Plateforme_<br />";
    } else {
        // Si le nombre est entre 0 et 20, je l'affiche en italique
        if ($i >= 0 && $i <= 20) {
            echo "<i>" . $i . "</i><br />";
        }
        // Si le nombre est entre 25 et 50, je l'affiche souligné
        elseif ($i >= 25 && $i <= 50) {
            echo "<u>" . $i . "</u><br />";
        }
        // Sinon, je l'affiche normalement avec un retour à la ligne
        else {
            echo $i . "<br />";
        }
    }
}
?>
