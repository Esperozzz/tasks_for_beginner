<?php

include_once '../../classes/Math.php';

use PHPUnit\Framework\TestCase;
use Esp\Tasks\Classes\Math as MyMath;

class MathTest extends TestCase
{

    private $math;

    protected function setUp()
    {
        $this->math = new MyMath();
    }

    public function testSquareNumber_SquaringTheNumberTwo_ReturnFor()
    {
        $result = $this->math->squareNumber(2);

        $this->assertEquals(4, $result);
    }

    public function testSquareNumber_SquaringTheNumberThree_ReturnNine()
    {
        $result = $this->math->squareNumber(3);

        $this->assertEquals(9, $result);
    }
}