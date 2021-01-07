<?php

include_once '../header.php';

$numbersSet = [1, 2, 3, 4, 5];
$newFirstElement = 0;
$newLastElement = 6;

array_unshift($numbersSet, $newFirstElement);
array_push($numbersSet, $newLastElement);

print_r($numbersSet);
