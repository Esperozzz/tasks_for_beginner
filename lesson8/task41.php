<?php

include_once '../header.php';

$rowText = ['<b>php</b>', '<i>html</i>'];

$clearedText = array_map('strip_tags', $rowText);

print_r($clearedText);
