<?php

include_once '../header.php';

$file_name = 'main_img.png';
$png_format = '.png';

if (substr($file_name, -4, 4) === $png_format) {
    echo YES;
} else {
    echo NO;
}