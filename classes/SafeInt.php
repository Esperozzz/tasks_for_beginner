<?php

namespace Esp\Tasks\Classes;

use Esp\Tasks\Classes\SafeIntException;

class SafeInt
{
    public static function overflowMaxInt($computedResult): void
    {
        if ($computedResult > PHP_INT_MAX || $computedResult < PHP_INT_MIN) {
            throw new SafeIntException("Итог вычеслений превышает максимальные границы числа");
        }
    }
}
