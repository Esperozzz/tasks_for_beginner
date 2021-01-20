<?php

include_once '../header.php';

$str = '';
for ($i = 1; $i < 9; $i++) {
    $str .= '-' . $i;
}
$str .= '-';

echo $str;
