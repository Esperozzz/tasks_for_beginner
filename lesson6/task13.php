<?php

include_once '../header.php';

$num = 30;
$result = [];

//O(n)
for ($i = 1; $i <= $num ; $i++) {
    if ($num % $i === 0) {
        $result[] = $i;
    }
}

print_r($result);

//
$result = [];
for ($i = 1; $i * $i <= $num; $i++) {
    if ($num % $i === 0) {
        $result[] = $i;
        if ($i * $i != $num) { $result[] = $num / $i; }
    }
}

print_r($result);
