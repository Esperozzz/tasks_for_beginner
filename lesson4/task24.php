<?php

include_once '../header.php';

define('YES', 'да');
define('NO', 'нет');

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