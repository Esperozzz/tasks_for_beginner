<?php

namespace Esp\Tasks\Classes;

use Esp\Tasks\Classes\SafeInt;

class Math
{
    public function squareNumber(int $num): int
    {
        $result = $num * $num;
        SafeInt::overflowMaxInt($result);
        return $result;
    }
}
