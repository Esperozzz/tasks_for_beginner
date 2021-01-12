<?php

include_once '../header.php';

$currentDate = time();

$second = 48;
$minut = 23;
$hour = 7;
$day = date('d');
$month = date('m');
$year = date('Y');

$assignedDate = mktime(
    $hour,
    $minut,
    $second,
    $month,
    $day,
    $year
);

