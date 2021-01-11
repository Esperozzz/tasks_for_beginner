<?php

include_once '../header.php';

$lowerBound = 1;
$UpperBound = 10;
$numbersSet = range($lowerBound, $UpperBound);

shuffle($numbersSet);

print_r($numbersSet);
