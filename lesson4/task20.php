<?php

include_once '../header.php';

$decade = [
    1 => 'Первая декада',
    2 => 'Вторая декада',
    3 => 'Третья декада'
];

$message = 'Текущее число:';
$error = 'Не верно указано число месяца';

for ($i = 0; $i < 10; $i++) {
    
    $day = mt_rand(-5, 40);

    echo "{$message} {$day}<br>";

    if ($day >= 1 && $day <= 10) {
        echo "{$decade[1]}<br>";
    } elseif ($day >= 11 && $day <= 20) {
        echo "{$decade[2]}<br>";
    } elseif ($day >= 21 && $day <= 31) {
        echo "{$decade[3]}<br>";
    } else { 
        echo "{$error}<br>";
    }
    
    echo '<hr>';
}
