<?php
// Job 04 : Créer une fonction calcule() qui effectue une opération entre deux nombres

// Définir la fonction calcule avec 3 paramètres : $a, $operation, $b
function calcule($a, $operation, $b) {
    // Vérifier le type d'opération et retourner le résultat
    if ($operation == '+') {
        return $a + $b;  // Addition
    } elseif ($operation == '-') {
        return $a - $b;  // Soustraction
    } elseif ($operation == '*') {
        return $a * $b;  // Multiplication
    } elseif ($operation == '/') {
        // Vérifier si $b n'est pas égal à 0 pour éviter la division par zéro
        if ($b != 0) {
            return $a / $b;  // Division
        } else {
            return "Erreur : Division par zéro";  // Gestion de l'erreur de division par zéro
        }
    } elseif ($operation == '%') {
        // Vérifier si $b n'est pas égal à 0 pour éviter la division par zéro
        if ($b != 0) {
            return $a % $b;  // Modulo
        } else {
            return "Erreur : Division par zéro";  // Gestion de l'erreur de division par zéro
        }
    } else {
        return "Erreur : Opération non valide";  // Si l'opération n'est pas reconnue
    }
}

// Exemple d'appels de la fonction avec différents paramètres
echo calcule(10, '+', 5);  // Affiche 15
echo "<br />";
echo calcule(10, '-', 5);  // Affiche 5
echo "<br />";
echo calcule(10, '*', 5);  // Affiche 50
echo "<br />";
echo calcule(10, '/', 5);  // Affiche 2
echo "<br />";
echo calcule(10, '/', 0);  // Affiche "Erreur : Division par zéro"
echo "<br />";
echo calcule(10, '%', 3);  // Affiche 1
?>
