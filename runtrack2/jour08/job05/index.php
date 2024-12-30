<?php
session_start();

//initialiser ou reinitialiser la partie

if (!isset($_SESSION["board"]) || isset($_POST['reset']))
{
    $_SESSION['board']= array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['player']= 'X';
    $_SESSION['message']= '';
}

//gestion du clic sur un case

if (isset($_POST['cell']) && $_SESSION['message'] == '')
{
    list($row,$col) = explode(',', $_POST['cell']);
    if ($_SESSION['board'][$row][$col]=='-')
    {
        $_SESSION['board'][$row][$col]=$_SESSION ['player'];
        if (check_winner($_session['board'],$_SESSION['player']))
        {
            $_SESSION['message']= $_session['player'].'a gagné';
        }
        elseif (check_draw($_session['board']))
        {
            $_SESSION['message']= 'match nul';
        }
        else
        {
            $_SESSION['player'] = $_SESSION ['player'] == 'X'? '0':'X';

        }
    }

 }
 //fonction pour verif le gagnant

 function check_winner($board,$player)
 {
    for ($i= 0; $i < 3; $i++)
    {
        if ($board[$i][0] == $player && $board[$i][1] == $player && $board[$i][2] == $player) return true;
    }
    if ($board[0][2])
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
    
</body>
</html>