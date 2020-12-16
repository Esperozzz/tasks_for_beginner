<?php

include_once '../header.php';

$salary = [
    'Коля'=>'1000$',
    'Вася'=>'500$',
    'Петя'=>'200$'
];

echo "Зарплата Пети: {$salary['Петя']}<br>";
echo "Зарплата Коли: {$salary['Вася']}<br>";
