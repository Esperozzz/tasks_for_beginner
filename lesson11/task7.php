<?php

include_once '../header.php';

$currentDate = time();

$firstFormat = 'Y-m-d';
$secondFormat = 'd.m.Y';
$thirdFormat = 'd.m.y';
$fourthFormat = 'H:i:s';


$firstFormattedDate = date($firstFormat, $currentDate);
$secondFormattedDate = date($secondFormat, $currentDate);
$thirdFormattedDate = date($thirdFormat, $currentDate);
$fourthFormattedDate = date($fourthFormat, $currentDate);

echo $firstFormattedDate . LINE_BREAK;
echo $secondFormattedDate . LINE_BREAK;
echo $thirdFormattedDate . LINE_BREAK;
echo $fourthFormattedDate . LINE_BREAK;
