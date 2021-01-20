<?php

include_once '../header.php';

for ($row = 1; $row <= 9; $row++) {
    for ($element = 1; $element <= $row; $element++) {
        echo $row;
    }
    echo LINE_BREAK;
}
