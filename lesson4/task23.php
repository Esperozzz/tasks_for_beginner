<?php

include_once '../header.php';

$string = 'abcde';

if ($string{0} === 'a') {
    echo YES;
} else {
    echo NO;
}
echo '<br>';

$string = 'dbcde';

if (strpos($string, 'a') === 0) {
    echo YES;
} else {
    echo NO;
}
echo '<br>';