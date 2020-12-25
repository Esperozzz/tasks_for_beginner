<?php

include_once '../header.php';

$text = 'Hello world!';
$shuffleText = str_shuffle($text);

echo $shuffleText;
