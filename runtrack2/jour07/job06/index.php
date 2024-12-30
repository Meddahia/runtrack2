<?php

function leetSpeak($str)
{
    //deffinir caractere a remplacer et leur remplacant 
    $from = ['A','a','B','b','E','e','G','g','L','l','S','s','T','t'];
    $to = ['4','4','8','8','3','3','6','6','1','1','5','5','7','7'];

    //remplacement des caractere dans la chaine
    $leetstr = str_replace($from, $to, $str);
    return $leetstr;
}
// exemple 

$original="hello c'est un teste";
$leet = leetSpeak($original);
echo $leet;
//sorti: h311o c'357 un 73573

