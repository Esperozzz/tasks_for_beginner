<?php

include_once '../header.php';

$number = 31;
$detectedDivisor = false;

for ($divider = 2; $divider < $number; $divider++) {
    if ($number % $divider === 0) {
        $detectedDivisor = true;
        break;
    }
}

if ($detectedDivisor) {
    echo YES;
} else {
    echo NO;
}
