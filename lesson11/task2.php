<?php

include_once '../header.php';

$hour = 0;
$minute = 0;
$second = 0;
$day = 1;
$month = 3;
$year = 2025;

$timestamp = mktime(
    $hour,
    $minute,
    $second,
    $month,
    $day,
    $year
);

echo "1 марта 2025 в формате timestamp: {$timestamp}";
