<?php

include_once '../header.php';

$str = '';

for ($i = 1; $i < 5; $i++) {
    $str .= str_repeat($i, $i);
}

echo $str;
