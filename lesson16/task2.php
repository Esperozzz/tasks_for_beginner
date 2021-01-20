<?php

include_once '../header.php';

$itemsSet = [];
$arraySize = 5;

for ($item = 1; $item <= $arraySize; $item++) {
    
    $str = '';
    for ($j = 0; $j < $item; $j++) {
        $str .= $item;
    }

    $itemsSet[] = $str;
}

var_dump ($itemsSet);
