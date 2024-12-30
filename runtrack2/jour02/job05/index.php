<?php
// Job 5 : Afficher les nombres premiers jusqu'à 1000 avec un retour à la ligne (<br />)

// Fonction pour vérifier si un nombre est premier
function is_prime($num) {
    // Si le nombre est inférieur ou égal à 1, ce n'est pas un nombre premier
    if ($num <= 1) {
        return false;
    }

    // Vérifie les divisors de 2 à la racine carrée de $num
    for ($i = 2; $i <= sqrt($num); $i++) {
        // Si $num est divisible par $i, ce n'est pas un nombre premier
        if ($num % $i == 0) {
            return false;
        }
    }

    // Si aucune division n'a eu lieu, le nombre est premier
    return true;
}

// Boucle pour parcourir les nombres de 2 à 1000
for ($i = 2; $i <= 1000; $i++) {
    // Si $i est un nombre premier, on l'affiche
    if (is_prime($i)) {
        echo $i . "<br />";
    }
}
?>
