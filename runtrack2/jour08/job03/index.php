<?php
session_start();

// verif du formulaire si soummis pour ajouter prenom

if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['prenom']))
{
    $prenom = trim($_POST['prenom']);
    if (!empty($prenom))
    {
        //ajoute le prenom a la variable de session
        $_SESSION['prenom'][]=''.$prenom;
    }
}
//verif du formulaire si reinitialisation de la liste 
if ($_SERVER['REQUEST_METHOD']=== 'POST'&& isset($_POST['reset']))
{
    //reinitialisation de la variable de session
    unset($_SESSION['prenom']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>gestion des prenoms</h1>

<!---formulaire pour ajouter un prenom --->

<form method='poste'>
    <label for="prenom">Prenom:</label>
        <input type="text" id="prenom" name="prenom" required>
            <button type="submit">Ajouter</button>
</form>

<!---formulaire pour reinitialiser la liste des prenoms --->

<form method="post">
    <button type="submit" name="reset">Réinitialiser la liste</button>
</form>
<h2>liste des prenoms:</h2>
<ul>
    <?php
    if (isset($_SESSION['prenom']) && !empty( $_SESSION['prenom']))
    {
        //affiche chaque prenom dans une liste
        foreach ($_SESSION['prenom'] as $prenom)
        {
            echo "<li>".htmlspecialchars($prenom)."</li>";
        }
    }
    else
    {
        echo "<p> aucun prenom ajouté.</p>";
    }
    ?>
</ul>
</body>
</html>