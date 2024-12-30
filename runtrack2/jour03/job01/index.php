<?php
// Job 01 : Créer un tableau avec des nombres et déterminer si chaque nombre est pair ou impair

// Définir le tableau avec les nombres donnés
$tableau = [200, 204, 173, 98, 171, 404, 459];

// Parcourir chaque élément du tableau
foreach ($tableau as $nombre) {
    // Vérifier si le nombre est pair (divisible par 2)
    if ($nombre % 2 == 0) {
        // Si le nombre est pair, afficher "X est paire"
        echo $nombre . " est paire<br />";
    } else {
        // Sinon, afficher "X est impaire"
        echo $nombre . " est impaire<br />";
    }
}
?>
