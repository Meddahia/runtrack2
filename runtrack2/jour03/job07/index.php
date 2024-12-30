<?php
// Job 07 : Créer une variable $str et remplacer chaque caractère par le suivant, 
// et déplacer le dernier caractère vers le premier

// Définir la chaîne de texte
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Obtenir la longueur de la chaîne
$length = strlen($str);

// Créer une nouvelle chaîne vide pour stocker le résultat
$new_str = "";

// Parcourir la chaîne caractère par caractère
for ($i = 0; $i < $length; $i++) {
    // Si nous sommes à l'avant-dernier caractère, on remplace le dernier caractère par le premier
    if ($i == $length - 1) {
        $new_str .= $str[0]; // Ajouter le premier caractère à la fin
    } else {
        // Ajouter le caractère suivant à la chaîne
        $new_str .= $str[$i + 1];
    }
}

// Afficher la nouvelle chaîne
echo $new_str;
?>
