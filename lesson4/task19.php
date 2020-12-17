<?php

include_once '../header.php';

for ($i = 0; $i < 10; $i++) {

    $num = mt_rand(-2, 5);
    $result = '';

    switch ($num) {
        case 1:
            $result = 'Зима<br>';
            break;
        case 2:
            $result = 'Лето<br>';
            break;
        case 3:
            $result = 'Весна<br>';
            break;
        case 4:
            $result = 'Осень<br>';
            break;
        default:
            $result = 'Нет такого времени года<br>';
    }

    echo "Число: {$num}<br>";
    echo $result . '<hr>';
}