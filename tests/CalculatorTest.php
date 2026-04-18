<?php
use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase {
    public function testAddReturnsCorrectSum() {
        $calculator = new Calculator();
        $result = $calculator->add(10, 5);
        
        $this->assertEquals(15, $result);
    }
}