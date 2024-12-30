<?php
// Job 04 : Afficher les nombres de 1 à 100 avec un retour à la ligne entre chaque nombre
// et remplacer certains nombres par des mots selon des conditions spécifiques

// Boucle de 1 à 100
for ($i = 1; $i <= 100; $i++) {
        
    // Vérifie si le nombre est un multiple de 3 et de 5
    // Si c'est le cas, on affiche "FizzBuzz"
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br />";
    }
    
    // Vérifie si le nombre est uniquement un multiple de 3
    // Si c'est le cas, on affiche "Fizz"
    elseif ($i % 3 == 0) {
        echo "Fizz<br />";
    }
    
    // Vérifie si le nombre est uniquement un multiple de 5
    // Si c'est le cas, on affiche "Buzz"
    elseif ($i % 5 == 0) {
        echo "Buzz<br />";
    }
    
    // Si le nombre n'est ni un multiple de 3, ni un multiple de 5
    // On affiche simplement le nombre
    else {
        echo "$i<br />";
    }
}
?>
