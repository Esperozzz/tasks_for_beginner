<?php

include_once '../header.php';

$lowerBound = 1;
$upperBound = 10;
$numbersArr = range($lowerBound, $upperBound);
$searchNum = 3;

if (in_array($searchNum, $numbersArr)) {
    echo YES . LINE_BREAK;
} else {
    echo NO . LINE_BREAK;
}
