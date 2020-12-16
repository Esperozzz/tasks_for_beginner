<?php

include_once '../header.php';

$week = [
    'ru' => [
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
        7 => 'Воскресение',
    ],
    'en' => [
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
        7 => 'Sunday',
    ]
];

$lang = 'ru';
$day = 3;

echo "День недели - {$week[$lang][$day]}";
