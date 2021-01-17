<?php

include_once '../../classes/SafeInt.php';
include_once '../../classes/SafeIntException.php';

use PHPUnit\Framework\TestCase;
use Esp\Tasks\Classes\SafeInt;
use Esp\Tasks\Classes\SafeIntException;

class SafeIntTest extends TestCase
{
    private $safeInt;

    public function setUp()
    {
        $this->safeInt = new SafeInt();
    }

    public function testOverflowMaxInt_CheckForExceedingTheMaximumNumber_ThrowSafeIntException()
    {
        $computedResult = PHP_INT_MAX;

        $this->expectException(SafeIntException::class);

        SafeInt::overflowMaxInt($computedResult);
    }

    public function testOverflowMaxInt_CheckForExceedingTheMinimumNumber_ThrowSafeIntException()
    {
        $computedResult = PHP_INT_MIN;

        $this->expectException(SafeIntException::class);

        SafeInt::overflowMaxInt($computedResult);
    }
}
