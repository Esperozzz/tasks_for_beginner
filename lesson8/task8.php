<?php

include_once '../header.php';

$lowerBound = 'a';
$topBound = 'z';
$arrayOfLetters = range($lowerBound, $topBound);

print_r($arrayOfLetters);
