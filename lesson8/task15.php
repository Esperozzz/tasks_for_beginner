<?php

include_once '../header.php';

$offset = 1;
$length = 3;
$arrayOfNumbers = [1, 2, 3, 4, 5];

$newArray = array_splice($arrayOfNumbers, $offset, $length);

print_r($newArray);
