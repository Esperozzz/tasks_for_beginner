<?php

include_once '../header.php';

$arrayOfLetters = ['a', 'b', 'c'];
$arrayOfNumbers = [1, 2, 3];

$combineArray = array_combine($arrayOfLetters, $arrayOfNumbers);

print_r($combineArray);
