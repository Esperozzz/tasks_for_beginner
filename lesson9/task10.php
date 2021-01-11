<?php

include_once '../header.php';

$firstLetter = 'a';
$lastLetter = 'z';
$firstNumber = 1;
$lastNumber = 26;

$keySet = range($firstLetter, $lastLetter);
$valueSet = range($firstNumber, $lastNumber);

$combineArray = array_combine($keySet, $valueSet);

print_r($combineArray);
