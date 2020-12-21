<?php

include_once '../header.php';

$arr = [];

for ($i = 0; $i < 10; $i++) {
    $arr[] = mt_rand(1, 1000);
}

print_r($arr);
