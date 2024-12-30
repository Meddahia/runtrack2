<?php

function gras($str)
{
    return preg_replace("/\b[a-z][a-z]*\b/","<b>$0</br>", $str);
}

function cesar($str, $decalage = 2)
{
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) 
    {
        $char = $str[$i];
        if (ctype_alpha($char)){
            $code = ord($char);
            $base = ctype_upper($char)? 65:97;
            $result .= chr(($code - $base + $decalage) % 26 + $base);
        }
        else {
            $result .= $char;
        }
}
return $result;
}

function plateforme($str)
{
     return preg_replace('/\b\w+me\b/','$0_', $str);
}
$result = '';
if ($_SERVER["REQUESTT_METHOD"]=="POST");
{
$str = $_POST['str'];
$fonction = $_POST['fonction'];
if ($fonction== 'gras')
{
    $result = gras($str);
}
elseif ($fonction== 'cesar')
{
    $result = cesar($str);
}
elseif ($fonction== 'plateforme')
{
    $result = plateforme($str);
}
}
?>