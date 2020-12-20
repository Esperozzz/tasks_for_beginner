<?php

include_once '../header.php';

define('DIVIDED', 'Делится');
define('NOT_DIVIDED', 'Делится с остатком');
define('NUM1', 'Число один:');
define('NUM2', 'Число два:');

$a = 10;
$b = 3;

echo NUM1 . $a . '<br>';
echo NUM2 . $b . '<br>';

if ($a % $b === 0) {
    echo DIVIDED . '<br>';
} else {
    echo NOT_DIVIDED . '<br>';
}
