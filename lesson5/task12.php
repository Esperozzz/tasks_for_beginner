<?php

include_once '../header.php';

$arr = [1, 2, 5, 9, 4, 13, 4, 10];

foreach ($arr as $item) {
    if ($item === 4) {
        echo 'Есть!<br>';
    }
}
