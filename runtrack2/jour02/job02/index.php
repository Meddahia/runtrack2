<?php
// Job 02: Afficher tous les nombres de 0 à 1337, sauf certains nombres spécifiques
// Afficher un retour à la ligne (<br />) entre chaque nombre

// Les nombres à exclure
$excluded_numbers = [26, 37, 88, 1111, 3233];

// Boucle de 0 à 1337
for ($i = 0; $i <= 1337; $i++) {
    // Si le nombre est dans la liste des nombres exclus, je le saute
    if (in_array($i, $excluded_numbers)) {
        continue; // passe à l'itération suivante
    }
    // Sinon, j'affiche le nombre avec un retour à la ligne
    echo $i . "<br />";
}
?>