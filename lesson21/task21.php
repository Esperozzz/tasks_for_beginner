<?php

include_once '../header.php';

$str = 'hello';

function myStrrev($str)
{
    $newStr = '';
    for ($i = strlen($str) - 1; $i >= 0 ; $i--) {
        $newStr .= $str{$i};
    }
    return $newStr;
}

echo myStrrev($str);


function myStrrev2($str)
{
    $newStr = '';
    $splitStr = str_split($str);
    arsort($splitStr);
    return implode('', $newStr);
}

echo myStrrev($str);
