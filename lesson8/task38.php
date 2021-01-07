<?php

include_once '../header.php';

$lowerBound = 1;
$upperBound = 20;
$sizeArray = 4;
$preserveKeys = false;

$numbersSet = range($lowerBound, $upperBound);
$chunkArray = array_chunk($numbersSet, $sizeArray, $preserveKeys);

print_r($chunkArray);
