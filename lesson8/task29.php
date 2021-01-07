<?php

include_once '../header.php';

$lowerBound = 1;
$upperBound = 25;

$arr = range($lowerBound, $upperBound);

shuffle($arr);

print_r($arr);