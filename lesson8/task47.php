<?php

include_once '../header.php';

$lowerLimitOfNumber = 1;
$upperLimitOfNumber = 9;
$itemLength = 3;
$preserveKeys = false;

$numbersSet = range($lowerLimitOfNumber, $upperLimitOfNumber);
$chunkArray = array_chunk($numbersSet, $itemLength, $preserveKeys);

print_r($chunkArray);
