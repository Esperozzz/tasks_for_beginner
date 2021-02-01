<?php

include_once '../header.php';

$numbersSet = [];

for ($i = 10; $i > 0; $i--) {
    $numbersSet[] = $i;
}

print_r($numbersSet);
