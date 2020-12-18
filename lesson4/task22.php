<?php

include_once '../header.php';

define('LEAP_YEAR', 'Високосный');
define('NOT_LEAP_YEAR', 'Не високосный');

$error = 'Год не может быть отрицательным числом либо равен нулю';
$message = 'Год: ';


for ($i = 0; $i < 10; $i++) {
    
    $year = mt_rand(-1000, 2200);

    echo "{$message} {$year}<br>";

    if ($year <= 0) {
        echo "{$error}<br>";
    } elseif ((($year % 4 === 0) && ($year % 100 > 0)) || $year % 400 === 0) {
        echo LEAP_YEAR . '<br>';
    } else {
        echo NOT_LEAP_YEAR . '<bt>';
    }
    echo '<hr>';
}