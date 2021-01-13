<?php

include_once '../header.php';

$currentDate = time();

$second = 59;
$minute = 12;
$hour = 13;
$day = 15;
$month = 3;
$year = 2000;

$assignedDate = mktime(
    $hour,
    $minute,
    $second,
    $month,
    $day,
    $year
);

$secondsHavePassedSinceDate = $currentDate - $assignedDate;

echo $secondsHavePassedSinceDate;
