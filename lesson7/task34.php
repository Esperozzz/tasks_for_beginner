<?php

include_once '../header.php';

$text = '/php/';
$charToDelete = '/';

$clearText = trim($text, $charToDelete);

echo $clearText;
