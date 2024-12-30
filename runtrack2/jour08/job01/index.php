<?php

session_start();

// initialiser le compteur 
if (isset($_SESSION["nbvisites"]))
{  $_SESSION["nbvisites"] = 0; }

if (isset($_post["reset"]))
{
    $_SESSION["nbvisites"]=0;
}
else {
    $_SESSION["nbvisites"]++;
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
    <h1>nombre de visites: <?php echo $_SESSION['nbvisites']?></h1>
    <form method="post">
        <button type="submit" name="reset">reset</button>
    </form>
</body>
</html>