<?php

include_once '../header.php';

$a = 3;

if (!isset($a)) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$a = null;

if (!isset($a)) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}
