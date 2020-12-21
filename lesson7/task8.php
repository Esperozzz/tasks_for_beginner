<?php

include_once '../header.php';

$password = 'password1';

$lenght = strlen($password);
if ($lenght > 5 && $lenght < 10) {
    echo 'Пароль подходит<br>';
} else {
    echo 'Пароль не корректный, необходимо придумать новый пароль<br>';
}