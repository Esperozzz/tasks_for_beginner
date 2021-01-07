<?php

include_once '../header.php';

$arrayOfNumbers = [1, 2, 3];
$arrayOfLetters = ['a', 'b', 'c'];

$mergedArrays = array_merge($arrayOfNumbers, $arrayOfLetters);

print_r($mergedArrays);
