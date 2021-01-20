<?php

include_once '../header.php';

function arrayFill($value, int $count): array
{
    $result = [];
    for ($item = 0; $item < $count; $item++) {
        $result[$item] = $value;
    }
    return $result;
}
