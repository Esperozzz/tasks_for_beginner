<?php

include_once '../header.php';

define('RESULT', 'Результат вычисления квадратного корня: ');
define('INTEGER', 'Целые: ');
define('DECIMAL', 'Десятичные: ');
define('HUNDREDTHS', 'Сотые: ');

$num = 379;

$result = sqrt($num);

echo RESULT . $result . '<br>';
echo INTEGER . round($result) . '<br>';
echo DECIMAL . round($result, 1) . '<br>';
echo HUNDREDTHS . round($result, 2) . '<br>';
