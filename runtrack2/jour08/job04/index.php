<?php

if ($_SERVER['REQUEST_METHOD']=='post')
{
    if (isset($_POST['connexion']))
    {
        //defini le cookie avec le preno de l'utilisateur
        $prenom = htmlspecialchars($_POST['prenom']);
        setcookie('', $prenom, $prenom, time()+(86400*7),'/'); //86400 = 1jour
        $_COOKIE['prenom'] = $prenom;
    }
    elseif (isset($_POST['deco']))
    {
        //efface le cookie 
        setcookie("prenom","",time()-3600,"/");
        unset($_COOKIE["prenom"]);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>
    <?php
    if (isset($_COOKIE['prenom'])):?>
        <div>
            bonjour <?= htmlspecialchars($_COOKIE["prenom"])?>
        !</div>
            <form method="post" action="">
                <button type="submit" name="deco">Deconnexion</button>
            </form>

    <?php else :?>

    <form method="post" action="">
        <label for="prenom">Prenom:</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
    </form>
    <?php endif ?>

</body>
</html>