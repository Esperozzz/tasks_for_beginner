<?php

include_once '../header.php';

$str = 'hello';

function myStrlen(string $str): string
{
    $i = 0;
    while (isset($str{$i})) {
        $i++;
    }
    return $i;
}

echo myStrlen($str);
