<?php

include_once '../header.php';

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}

echo $sum;
