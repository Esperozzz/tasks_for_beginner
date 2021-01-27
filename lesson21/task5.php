<?php

include_once '../header.php';

$sumOfSquare = 0;
for ($i = 1; $i <= 15; $i++) {
    $sumOfSquare += sqrt($i);
}

echo round($sumOfSquare, 2);
