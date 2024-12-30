<?php

// nom du cookie 
$_COOKIE_nam = "nbvisites";

//verification de l'existence du cookie et geston du comteur de vistes

if (isset($_COOKIE[$_COOKIE_nam])) 
{
    $visite_count = $_COOKIE[$_COOKIE_nam] = 1;
}
else
{
    $visite_count = 1;
}

//mise a jour du cookie avec nouvelle valeur /expiration de 1 an 
setcookie($_COOKIE_nam,$visite_count,time()+(365*24*60*60));

//rintialisation du coupteur visite si formulaire soummis
if ($_SERVER['REQUEST_METHOD']==="POST" && isset( $_POST["reset"]))
{
    setcookie($_COOKIE_nam ,0, time()-3600) ; //suprime le cookie
    header("location:". $_SERVER["PHP_SELF"]);//rafrechie la page

    exit;

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compteur de visite</title>
</head>
<body>
    <h1>Compteur de visite</h1>

    <p>
        nombre de visiteeur 
        <?php
            echo $visite_count
        ?>
    </p>
    <form method="post">
        <button type="submit" name="reset">réinitialiser le compteur</button>

</form>





</body>
</html>