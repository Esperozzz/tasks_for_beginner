<?php

include_once '../header.php';

$a = '1';

if ($a === '1') {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$a = 0;

if ($a === 1) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$a = -3;

if ($a === 3) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}
