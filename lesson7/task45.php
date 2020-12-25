<?php

include_once '../header.php';

$notFormattedText = 'html, <b>php</b>, js';
$formattedText = htmlspecialchars($notFormattedText);

echo $formattedText;
