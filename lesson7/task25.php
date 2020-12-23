<?php

include_once '../header.php';

$text = 'Hello .. this is a point test';
$twoPoints = '..';
$noPoints = 0;
$numberOfCoincidences = strpos($text, $twoPoints);

if ($numberOfCoincidences > $noPoints) {
    echo IS;
} else {
    echo NO;
}