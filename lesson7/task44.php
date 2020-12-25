<?php

include_once '../header.php';

$str = '<h1>Test string</h1> <p>Lorem ipsum dolor sit ' .
    'amet, consectetur adipisicing elit. At, commodi?html, ' .
    '</p> <b>php</b>, <i>js</i>';

$allowedTags = '<b><i>';
$formattedLine = strip_tags($str, $allowedTags);

echo $formattedLine;
