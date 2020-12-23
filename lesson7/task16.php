<?php

include_once '../header.php';

define('HYPHEN', '-');
$replaceableValue = '.';

$date = '31.12.2013';

echo str_replace($replaceableValue, HYPHEN, $date);
