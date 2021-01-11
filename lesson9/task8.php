<?php

include_once '../header.php';

$text = 'String for test';

$reverseText = strrev($text);
$firstUppercaseCharacter = ucfirst($reverseText);
$resultText = strrev($firstUppercaseCharacter);

echo $resultText;
