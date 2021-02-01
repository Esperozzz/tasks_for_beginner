<?php

include_once '../header.php';

$arr = [
    0=>['name'=>'Коля', 'salary'=>300],
    1=>['name'=>'Вася', 'salary'=>400],
    2=>['name'=>'Петя', 'salary'=>500],
];

foreach ($arr as $value) {
    echo $value['name'] . '-' . $value['salary'] . LINE_BREAK;
}
