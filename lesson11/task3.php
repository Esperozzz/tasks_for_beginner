<?php

include_once '../header.php';

$second = 0;
$minut = 0;
$hour = 0;
$day = 31;
$month = 12;
$year = date('Y');

$lastDayOfTheYear = mktime(
    $hour,
    $minut,
    $second,
    $month,
    $day,
    $year
);

echo "Last day of the year in tumestamp firmat : {$lastDayOfTheYear}";
