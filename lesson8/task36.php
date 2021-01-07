<?php

include_once '../header.php';

$characterSet = ['a', 'b', 'c'];
$requiredLength = 6;
$newElement = '-';

$resultArray = array_pad($characterSet, $requiredLength, $newElement);

print_r($resultArray);
