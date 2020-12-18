<?php

include_once '../header.php';

$names = ['Коля' => '200', 'Вася' => '300', 'Петя' => '400'];

foreach ($names as $name => $salary) {
    echo "{$name} - зарплата {$salary} долларов.<br>";
}
