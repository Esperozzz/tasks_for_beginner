<?php

include_once '../header.php';

$firstNaturalNumber = 1;
$number = 10;

$rangeOfNaturalsNumbers = range($firstNaturalNumber, $number);
$factorialOfNumber = array_product($rangeOfNaturalsNumbers);

echo "Factorial of number {$number} = {$factorialOfNumber}";
