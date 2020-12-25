<?php

include_once '../header.php';

$notFormattedLine = 'html, <b>php</b>, js';
$formattedLine = strip_tags($notFormattedLine);

echo $formattedLine;
