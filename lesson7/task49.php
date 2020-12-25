<?php

include_once '../header.php';

$randomASCIINumber = mt_rand(ASCII_UPPERCASE_A_CODE, ASCII_UPPERCASE_Z_CODE);
$str = chr($randomASCIINumber);

echo $str;
