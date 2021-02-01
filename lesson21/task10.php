<?php

include_once '../header.php';

$randomNumberSet = [];

for ($i = 0; $i < 10; $i++) {
    $randomNumberSet[] = random_int(1, 10);
}

print_r($randomNumberSet);
