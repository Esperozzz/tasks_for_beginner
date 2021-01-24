<?php

include_once '../header.php';

/**
 * @param int $num1
 * @param int $num2
 * @return bool
 */
function isFriendlyNumbers(int $num1, int $num2): bool
{
    //$sumDividersOfNum1 = sumNumbers(dividersOfNumber($num1));
    //$sumDividersOfNum2 = sumNumbers(dividersOfNumber($num2));

    //return $sumDividersOfNum1 === $sumDividersOfNum2;

    return $num1 === $num2;
}

/**
 * @param array $numbers
 * @return int
 */
function sumNumbers(array $numbers): int
{
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

/**
 * @param int $num
 * @return array
 */
function dividersOfNumber(int $num): array
{
    $dividersOfNumber = [];

    if ($num !== 0) {
        for ($divider = 1; $divider < $num; $divider++) {
            if (($num % $divider) === 0) {
                $dividersOfNumber[] = $divider;
            }
        }
    }

    return $dividersOfNumber;
}

$numbers = range(1, 100);
$sumOfDividersOfNum = [];

foreach ($numbers as $number) {
    $sumOfDividersOfNum[$number] = sumNumbers(dividersOfNumber($number));
}

$allFriendlyNumbers = [];
//Итаеративно сравниваем суммы делителей, если они равны, записываем
//совпадения в каждый отдельный массив
foreach ($sumOfDividersOfNum as $key1 => $comparedNum) {
    foreach ($sumOfDividersOfNum as $key2 => $num) {
        if ($key1 !== $key2 && isFriendlyNumbers($comparedNum, $num)) {
            $allFriendlyNumbers[$key1 . '_and_' . $key2] = $comparedNum;
        }
    }
}

echo '<pre>';
print_r($allFriendlyNumbers);
echo '</pre>';