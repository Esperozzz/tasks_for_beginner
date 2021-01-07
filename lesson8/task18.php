<?php

include_once '../header.php';

$associativeArray = ['a' => 1, 'b' => 2, 'c' => 3];

$keys = array_keys($associativeArray);
$values = array_values($associativeArray);

print_r($keys);
print_r($values);
