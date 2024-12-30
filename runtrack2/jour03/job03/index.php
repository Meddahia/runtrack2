<?php
// Job 03 : Créer une variable $str et extraire uniquement les voyelles

// Définir la chaîne de texte
$str = "I'm sorry Dave I'm afraid I can't do that";

// Définir les voyelles (minuscule et majuscule)
$voyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

// Parcourir chaque caractère de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Vérifier si le caractère actuel est une voyelle
    if (in_array($str[$i], $voyelles)) {
        // Si c'est une voyelle, l'afficher
        echo $str[$i];
    }
}
?>
