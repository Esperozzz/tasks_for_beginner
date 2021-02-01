<?php

include_once '../header.php';

$str = '';

for ($i = 0; $i < 6; $i++) {
    $str .= random_int(1, 9);
}

echo $str;
