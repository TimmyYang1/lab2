<?php
namespace Test\Command;

use Command;
use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{

    public function testConstruct()
    {
        $subtraction = new Subtraction(5,5);

        $this->assertInstenceOf(ICommand::class,$subtraction);
    }
    public function testExecute()
    {
        $subtraction = new Subtraction(14444,4);
        $result = $subtraction->execute();

        $this->assertEquels(14440, $result);
    }
}