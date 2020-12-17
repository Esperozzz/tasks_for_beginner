<?php

include_once '../header.php';

for ($i = 0; $i < 10; $i++) {

    $a = mt_rand(-20, 20);
    $b = mt_rand(-20, 20);

    echo 'Переменная $a = ' . $a . '<br>';
    echo 'Переменная $b = ' . $b . '<br>';

    if (($a > 2 && $a < 11) || ($b >= 6 && $b <= 14)) {
        echo 'Верно<br>';
    } else {
        echo 'Неверно<br>';
    }
    echo '<hr>';
}