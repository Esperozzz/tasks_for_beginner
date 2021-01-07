<?php

include_once '../header.php';

$replacement = [ 'a', 'b', 'c'];
$offset = 1;
$length = 0;
$arrayOfNumbers = [1, 2, 3, 4, 5];

//Заменяем часть массива на символы
array_splice(
    $arrayOfNumbers,
    $offset,
    $length,
    $replacement
);

print_r($arrayOfNumbers);
