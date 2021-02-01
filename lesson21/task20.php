<?php

include_once '../header.php';

$str = 'hello';

function myUcFirst(string $str): string
{
    return strtr($str, $str{0}, strtoupper($str{0}));
}

echo myUcFirst($str);
