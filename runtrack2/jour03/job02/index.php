<?php
// Job 02 : Créer une variable $str avec une chaîne de texte et afficher un caractère sur deux

// Définir la chaîne de texte
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcourir la chaîne en sautant un caractère sur deux
for ($i = 0; $i < strlen($str); $i += 2) {
    // Afficher le caractère à la position $i
    echo $str[$i];
}
?>
