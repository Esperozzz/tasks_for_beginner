<?php

include_once '../header.php';

$offset = 1;
$length = 2;
$replacement = [];

$arrayOfNumbers = [1, 2, 3, 4, 5];

//Заменяем часть массива на пустой массив
array_splice(
    $arrayOfNumbers,
    $offset,
    $length,
    $replacement
);

print_r($arrayOfNumbers);
