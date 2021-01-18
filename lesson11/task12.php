<?php

include_once '../header.php';

define('FIRST_YEAR_OF_OUR_ERA', 1);

$script = $_SERVER['SCRIPT_NAME'];
$errorMessages = [];
$result = '';

if (isset($_POST['submit'])) {
    if (!empty($_POST['year'])) {

        //Очищаем ввод
        $enteredYear = trim($_POST['year']);

        //Проверяем, что бы ввод был числом
        if (!is_int($enteredYear)) {
            $errorMessages[] = 'Year must be a number';
        }

        //Ввод является положительным числом
        if ($enteredYear < FIRST_YEAR_OF_OUR_ERA || $enteredYear > PHP_INT_MAX) {
            $errorMessages[] = 'Year entered incorrectly';
        }

        //Ошибок нет
        if (empty($errorMessages)) {
            $result = $enteredYear;
        }
    }
}

include_once 'layout/page.php';
