<?php
namespace Test\Command;

use Command;
use PHPUnit\Framework\TestCase;

class CalculationTest extends TestCase
{
    public function testCalculat()
    {
        $calculator = new Calculetor();
        $summation = new Summation(105,24);
        $calculator->setCommand($summation);
        $this->assertEquels(129,$calculator->calculat());
        $division = new Division(12,4);
        $calculator->setCommand($division);
        $this->assertEquels(3,$calculator->calculat());
        $subtraction = new Subtraction(12165,8484);
        $calculator->setCommand($subtraction);
        $this->assertEquels(3681,$calculator->calculat());
        $Multiplication = new Multiplication(121,8);
        $calculator->setCommand($Multiplication);
        $this->assertEquels(968,$calculator->calculat());
        $SquareArea = new SquareArea(5);
        $calculator->setCommand($SquareArea);
        $this->assertEquels(25,$calculator->calculat());
    }
}