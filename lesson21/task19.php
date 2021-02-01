<?php

include_once '../header.php';

$arr = [];

for ($i = 0; $i < 10; $i++) {
    for ($k = 0; $k < 10; $k++) {
        $arr[$i][$k] = random_int(1, 10);
    }
}

dd($arr);
