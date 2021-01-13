<?php

include_once '../header.php';

$hour = 0;
$minute = 0;
$second = 0;
$day = 12;
$month = 2;
$year = 2025;

$timestamp = mktime(
    $hour,
    $minute,
    $second,
    $month,
    $day,
    $year
);

$dateFormat = 'd.m.Y';
$formattedDate = date($dateFormat, $timestamp);

echo $formattedDate;
