<?php

include_once '../header.php';

$a = 'test';

if ($a === 'test') {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$a = 'тест';

if ($a === 'test') {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$a = 3;

if ($a === 'test') {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}
