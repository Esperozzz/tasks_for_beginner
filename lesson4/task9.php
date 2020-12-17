<?php

include_once '../header.php';

$a = 1;

if (empty($a) && !is_numeric($a)) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$a = 3;

if (empty($a) && !is_numeric($a)) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$a = -3;

if (empty($a) && !is_numeric($a)) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$a = 0;

if (empty($a) && !is_numeric($a)) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$a = null;

if (empty($a) && !is_numeric($a)) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$a = true;

if (empty($a) && !is_numeric($a)) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$a = '';

if (empty($a) && !is_numeric($a)) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$a = '0';

if (empty($a) && !is_numeric($a)) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}
