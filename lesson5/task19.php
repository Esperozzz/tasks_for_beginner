<?php

include_once '../header.php';

define('NUMBER', 'Число: ');
define('ITERATIONS', 'Количество итераций: ');

$num = 1000;
$i = 1;

while ($num >= 50) {
    $num /= 2;
    $i++;
}

echo NUMBER . $num . '<br>';
echo  ITERATIONS . $i;

echo '<hr>';

$num = 1000;

for ($i = 1; $num > 50; $i++) {
    $num /= 2;
}

echo NUMBER . $num . '<br>';
echo  ITERATIONS . $i;
