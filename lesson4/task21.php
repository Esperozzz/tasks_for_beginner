<?php

include_once '../header.php';

$seasons = [
    'winter' => 'зима',
    'spring'=> 'весна',
    'summer' => 'лето',
    'autumn' =>'осень'
];

$message = 'Число месяца:';
$error = 'Указанного месяца не существует';

for ($i = 0; $i < 10; $i++) {

    $month = mt_rand(-1, 13);

    echo "{$message} {$month}<br>";
    
    if ($month === 1 || $month === 2 || $month === 12) {
        echo "{$seasons['winter']}<br>";
    } elseif ($month >= 4 && $month <= 6) {
        echo "{$seasons['spring']}<br>";
    } elseif ($month >= 7 && $month <= 9) {
        echo "{$seasons['summer']}<br>";
    } elseif ($month >= 10 && $month <= 12) {
        echo "{$seasons['autumn']}<br>";
    } else {
        echo "{$error}<br>";
    }
    echo '<hr>';
}
