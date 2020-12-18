<?php

include_once '../header.php';

$week = [
    1 => 'Понедельник',
    2 => 'Вторник',
    3 => 'Среда',
    4 => 'Четверг',
    5 => 'Пятница',
    6 => 'Суббота',
    7 => 'Воскресение',
];

foreach ($week as $key => $day) {
    if ($key === 6 || $key === 7) {
        $day = '<strong>' . $day . '</strong>';
    }

    echo $day . '<br>';
}
