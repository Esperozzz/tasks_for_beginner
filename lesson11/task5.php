<?php

include_once '../header.php';

define('SECOND_PER_HOUR', 3600);

$currentDate = time();

$second = 48;
$minute = 23;
$hour = 7;
$previousDay = date('j') - 1;
$month = date('n');
$year = date('Y');

$assignedDate = mktime(
    $hour,
    $minute,
    $second,
    $month,
    $previousDay,
    $year
);

//Вычисляем модуль числа, что бы не определять наибольшую дату
$timeDiff = abs($currentDate - $assignedDate);

//Округляем число часов до целых
$diffInHours = floor($timeDiff / SECOND_PER_HOUR);

echo $diffInHours;
