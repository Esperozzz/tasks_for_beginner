<?php

include_once '../header.php';

for ($i = 0; $i <= 5; $i++) {

    $string = $i . '2345';

    if ((int)$string{0} === 1 ||
        (int)$string{0} === 2 ||
        (int)$string{0} === 3
    ) {
        echo YES;
    } else {
        echo NO;
    }
    echo '<br>';
}