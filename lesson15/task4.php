<?php

include_once '../header.php';

for ($row = 1; $row <= 20; $row++) {
    for ($element = 1; $element <= $row; $element++) {
        echo 'x';
    }
    echo LINE_BREAK;
}
