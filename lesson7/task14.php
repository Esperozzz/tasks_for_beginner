<?php

include_once '../header.php';

$file_name = 'main_img.jpg';
$png_format = '.png';
$jpg_format = '.jpg';

if (substr($file_name, -4, 4) === $png_format ||
    substr($file_name, -4, 4) === $jpg_format
) {
    echo YES;
} else {
    echo NO;
}
