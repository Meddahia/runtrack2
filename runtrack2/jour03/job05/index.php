<?php
// Job 05 : Créer une variable $str, un dictionnaire $dic pour compter les consonnes et voyelles, puis afficher les résultats dans un tableau HTML

// Définir la chaîne de texte
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

// Définir un dictionnaire avec les clés 'voyelles' et 'consonnes'
$dic = [
    'voyelles' => 0,
    'consonnes' => 0
];

// Définir les voyelles et consonnes
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y']; // Inclut les voyelles en minuscule et majuscule
$consonnes = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z', 'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z']; // Inclut les consonnes en minuscule et majuscule

// Parcourir chaque caractère de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Obtenir le caractère courant
    $caractere = $str[$i];

    // Vérifier si c'est une voyelle
    if (in_array($caractere, $voyelles)) {
        $dic['voyelles']++; // Si c'est une voyelle, incrémenter le compteur des voyelles
    }
    // Vérifier si c'est une consonne
    elseif (in_array($caractere, $consonnes)) {
        $dic['consonnes']++; // Si c'est une consonne, incrémenter le compteur des consonnes
    }
}

// Affichage des résultats dans un tableau HTML
echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>" . $dic['voyelles'] . "</td><td>" . $dic['consonnes'] . "</td></tr></tbody>";
echo "</table>";
?>
