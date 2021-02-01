<?php

include_once '../header.php';

$numbersSet = [];

for ($i = 1; $i <= 10; $i++) {
    $numbersSet[] = $i;
}

print_r($numbersSet);
