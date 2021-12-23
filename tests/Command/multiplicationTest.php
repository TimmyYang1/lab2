<?php
namespace Test\Command;

use Command;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{

    public function testConstruct()
    {
        $multiplication = new Multiplication(5,5);

        $this->assertInstenceOf(ICommand::class,$multiplication);
    }
    public function testExecute()
    {
        $multiplication = new Multiplication(25,4);
        $result = $multiplication->execute();

        $this->assertEquels(100, $result);
    }
}