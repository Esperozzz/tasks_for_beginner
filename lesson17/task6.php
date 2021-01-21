<?php

include_once '../header.php';
include_once 'task5.php';

$integersSet = range(1, 20);

function integerEvenFilter(array $list): array
{
    $evenIntegers = [];
    
    foreach ($list as $num) {
        if (isEven($num)) {
            $evenIntegers[] = $num;
        }
    }
    
    return $evenIntegers;
}

var_dump(integerEvenFilter($integersSet));
