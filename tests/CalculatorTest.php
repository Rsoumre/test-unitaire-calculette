<?php
require_once __DIR__ . '/../calculator.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAddition()
    {
        $this->assertEquals(5, $this->calculator->calculate('2+3'));
    }

    public function testSubtraction()
    {
        $this->assertEquals(1, $this->calculator->calculate('5-4'));
    }

    public function testMultiplication()
    {
        $this->assertEquals(6, $this->calculator->calculate('2*3'));
    }

    public function testDivision()
    {
        $this->assertEquals(2, $this->calculator->calculate('6/3'));
    }

    public function testComplexExpression()
    {
        $this->assertEquals(9, $this->calculator->calculate('2+3*4-5'));
    }

    public function testDivisionByZero()
    {
        $this->expectExceptionMessage('Erreur de calcul');
        $this->calculator->calculate('5/0');
    }
}
    