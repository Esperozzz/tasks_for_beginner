<?php
define('DATE_AND_TIME_SEPARATOR', 'T');
define('MONTH_IN_YEAR', 12);
define('FRIDAY_SEQUENCE_NUMBER', 5);

/**
 * Находит все пятницы тринадцатого в указанном году в формате d-m-Y
 */
function fridayOfTheThirteenthYear(int $year): array
{
    $fridays = [];
    for ($month = 1; $month <= MONTH_IN_YEAR; $month++) {

        $timestamp = mktime(0, 0, 0, $month, 13, $year);
        $dayOfTheWeek = (int) date('N', $timestamp);

        if ($dayOfTheWeek === FRIDAY_SEQUENCE_NUMBER) {
            $fridays[] = date('d-m-Y', $timestamp);
        }
    }
    return $fridays;
}

/**
 * Проверяет, является ли год високосным
 */
function isLeapYer(int $year): bool
{
    $timestamp = mktime(0, 0, 0, 12, 31, $year);
    return (bool) date('L', $timestamp);
}

/**
 * Проверяет дату на соответствие формату Y-m-dTH:i:s
 * Пример: 2025-12-31T12:13:59
 */
function matchDateAndTimeFormat(string $date): bool
{
    $separator = substr($date, 10, 1);
    if ($separator === DATE_AND_TIME_SEPARATOR) {
        $newDate = str_replace(DATE_AND_TIME_SEPARATOR, ' ', $date);
        
        return date_create_from_format('Y-m-d H:i:s', $newDate) instanceof DateTime;
    }
    return false;
}

/**
 * Проверяет дату на соответствие указанному формату
 */
function matchDateFormat(string $format, string $date): bool
{
    return date_create_from_format($format, $date) instanceof DateTime;
}

/**
 * Принимает дату в формате ДД.ММ.ГГГГ и конвертирует в timestamp формат
 */
function convertDateToTimestamp(string $separator, string $date): int
{
    if ($date !== '') {
        $parts = explode($separator, $date);
        return mktime(0, 0, 0, $parts[1], $parts[0], $parts[2]);
    }
    return 0;
}

/**
 * Определяет день недели по дате
 */
function dayOfTheWeek(int $timestamp): string
{
    return date('l', $timestamp);
}

/**
 * Определяет название месяца по дате
 */
function monthName(int $timestamp): string
{
    return date('F', $timestamp);
}

/**
 * Получить наибольшую дату из двух
 */
function getLaterDate(int $timestamp1, int $timestamp2): int
{
    if ($timestamp2 > $timestamp1) {
        return $timestamp2;
    }
    return $timestamp1;
}
