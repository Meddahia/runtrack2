<?php
// Job 02 : Créer une fonction bonjour($jour) qui affiche "Bonjour" ou "Bonsoir" selon la valeur de $jour

// Définir la fonction bonjour
function bonjour($jour) {
    // Vérifier la valeur de $jour
    if ($jour) {
        echo "Bonjour";  // Si $jour est true, afficher "Bonjour"
    } else {
        echo "Bonsoir";  // Si $jour est false, afficher "Bonsoir"
    }
}

// Exemple d'appel de la fonction
bonjour(true);   // Affiche "Bonjour"
echo "<br />";   // Ajoute un retour à la ligne
bonjour(false);  // Affiche "Bonsoir"
?>
