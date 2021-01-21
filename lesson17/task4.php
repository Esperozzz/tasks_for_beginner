<?php

include_once '../header.php';
include_once 'task3.php';

define('REQUIRED_SUM_DIGITS_OF_YEAR', 13);

//Тестовые данные
$yearsSet = range(1, 2021);

function sumOfTheDigitsIsThirteen(array $list): array
{
    $newList = [];
    
    foreach ($list as $year) {
        if (getDigitsSum($year) == REQUIRED_SUM_DIGITS_OF_YEAR) {
            $newList[] = $year;
        }
    }
    return $newList;
}

var_dump(sumOfTheDigitsIsThirteen($yearsSet));
