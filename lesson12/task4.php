<?php

include_once '../header.php';

function dayOfTheWeek(int $dayNumber): string
{
    $days = [
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
        7 => 'Воскресение',
        8 => 'Нет такого дня недели'
    ];

    if ($dayNumber < 1 || $dayNumber > 7) {
        $dayNumber = 8;
    }

    return $days[$dayNumber];
}
