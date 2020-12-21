<?php

include_once '../header.php';

$arr = [1, 2, -1, -2, 3, -3];
foreach ($arr as $key => $value) {
    $arr[$key] = abs($value);
}
 
print_r($arr);
