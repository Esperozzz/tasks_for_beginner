<?php

include_once '../header.php';

$addedElement = 'x';
$startIndex = 0;
$numberOfItems = 10;

$filledArray = array_fill($startIndex, $numberOfItems, $addedElement);

print_r($filledArray);
