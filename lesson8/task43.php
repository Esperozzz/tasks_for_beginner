<?php

include_once '../header.php';

$numbersSetOne = [1, 2, 3, 4, 5];
$numbersSetTwo = [3, 4, 5, 6, 7];

$numbersIntersect = array_intersect($numbersSetOne, $numbersSetTwo);

print_r($numbersIntersect);
