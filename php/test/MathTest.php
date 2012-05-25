<?php

require_once '../math.php';

class MathTest extends PHPUnit_Framework_TestCase
{
    public function testSumMultiples()
    {
        $this->assertEquals(1683, sumMultiples(3, 100));
        $this->assertEquals(21, sumMultiples(7, 15));
        
        $euler = sumMultiples(3, 1000) + sumMultiples(5, 1000) - sumMultiples(15, 1000);
        $this->assertEquals(233168, $euler);
    }
    
    public function testNextFibonacci()
    {
        $this->assertEquals(1.0, nextFibonacci(2));
        $this->assertEquals(55.0, nextFibonacci(10));
        $this->assertEquals(9227465.0, nextFibonacci(35));
        $this->assertEquals(144.0, nextFibonacci(12));
    }
    
    public function testFibonacci()
    {
        $expected = array(1, 2, 3, 5, 8, 13, 21, 34, 55, 89);
        $actual = fibonacci(89);
        $this->assertEquals($expected, $actual);
    }
}
