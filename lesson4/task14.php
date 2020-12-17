<?php

include_once '../header.php';

$var = true;

if (!$var) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$var = false;

if (!$var) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$var = true;

if ($var !== true) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$var = false;

if ($var !== true) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}
