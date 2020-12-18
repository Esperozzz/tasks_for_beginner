<?php

include_once '../header.php';

$i = 1;

$result = 0;
while ($i <= 100) {
    $result += $i++;
}

echo $result . '<br>';

for ($i = 0; $i <= 100; $i++) {
    $result += $i;
}

echo $result;
