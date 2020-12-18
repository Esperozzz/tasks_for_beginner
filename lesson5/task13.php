<?php

include_once '../header.php';

$arr = ['10', '20', '30', '50', '235', '3000'];

foreach ($arr as $item) {
    if ((int) $item{0} === 1 ||
        (int) $item{0} === 2 ||
        (int) $item{0} === 5
    ) {
        echo $item . '<br>';
    }
}
