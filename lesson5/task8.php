<?php

include_once '../header.php';

$i = 0;
while ($i <= 100) {
    echo $i . '<br>';
    $i += 2;
}

for ($i = 0; $i <= 100; $i += 2) {
    echo $i . '<br>';
}
