<?php

include_once '../header.php';

$currentDay = date('z');
$newYearDay = date('z', mktime(0, 0, 0, 12, 31));
$dayToTheNewYear = $newYearDay - $currentDay;

echo $dayToTheNewYear;
