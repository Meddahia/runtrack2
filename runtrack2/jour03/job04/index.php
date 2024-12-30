<?php
// Job 04 : Créer une variable $str et compter le nombre de caractères présents

// Définir la chaîne de texte
$str = "Dans l'espace, personne ne vous entend crier";

// Initialiser une variable pour compter les caractères
$compte = 0;

// Parcourir chaque caractère de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Compter chaque caractère, y compris les espaces et les caractères spéciaux
    $compte++;
}

// Afficher le nombre total de caractères
echo "Le nombre de caractères dans la chaîne est : " . $compte;
?>
