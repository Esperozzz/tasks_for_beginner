<?php

include_once '../header.php';

$week = [
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'Wednesday',
    4 => 'Thursday',
    5 => 'Friday',
    6 => 'Saturday',
    7 => 'Sunday'
];

//Дата дня рождения пользователя (условие задачи)
$hour = 0;
$minute = 0;
$second = 0;
$day = 6;
$month = 6;
$year = 2006;

$birthdayTimestamp = mktime(
    $hour,
    $minute,
    $second,
    $month,
    $year
);

$dayFormat = 'N';
$dayOfTheWeek = date($dayFormat);
$currentDay = $week[$dayOfTheWeek];

$birthdayDate = date($dayFormat, $birthdayTimestamp);
$dayOfTheWeek = $week[$birthdayDate];

echo 'Current day of the week: ' . $currentDay . LINE_BREAK;
echo 'Day of the week ' . $dayOfTheWeek;
