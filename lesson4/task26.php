<?php

include_once '../header.php';

$string = '123123';
$str_left = $string{0} + $string{1} + $string{2};
$str_right = $string{3} + $string{4} + $string{5};

if ($str_left === $str_right) {
    echo YES;
} else {
    echo NO;
}
echo '<br>';


$string = '234123';
$str_left = $string{0} + $string{1} + $string{2};
$str_right = $string{3} + $string{4} + $string{5};

if ($str_left === $str_right) {
    echo YES;
} else {
    echo NO;
}
echo '<br>';