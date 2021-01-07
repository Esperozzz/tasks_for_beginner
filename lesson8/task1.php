<?php

include_once '../header.php';

$lowerBound = -5;
$upperBound = 15;
$arr = range($lowerBound, $upperBound);

$arrCount = count($arr);

echo $arrCount;
