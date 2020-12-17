<?php

include_once '../header.php';

$a = '123';

if (!empty($a)) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}

$a = '';

if (!empty($a)) {
    echo 'Верно<br>';
} else {
    echo 'Неверно<br>';
}
