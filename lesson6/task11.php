<?php

include_once '../header.php';

for ($i = 0; $i < 10; $i++) {
    $a = mt_rand(-100, 100);
    $b = mt_rand(-100, 100);
    $result = $a - $b ;

    echo "Первое число: {$a}<br>";
    echo "Второе число: {$b}<br>";
    echo "Модуль числа {$result} равен " . abs($result) . '<br>';
    echo '<hr>';
}
