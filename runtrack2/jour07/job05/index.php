<?php
// Job 05 : Créer une fonction occurrences($str, $char) qui compte les occurrences d'un caractère dans une chaîne

// Définir la fonction occurrences
function occurrences($str, $char) {
    // Utiliser la fonction substr_count pour compter les occurrences de $char dans $str
    return substr_count($str, $char);  // Retourne le nombre d'occurrences
}

// Exemple d'appel de la fonction avec une chaîne et un caractère
$str = "Fatima";
$char = "a";

// Afficher le résultat
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char);
?>
