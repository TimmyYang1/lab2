<?php
namespace Test\Command;

use Command;
use PHPUnit\Framework\TestCase;

class SummationTest extends TestCase
{

    public function testConstruct()
    {
        $summation = new Summation(5,5);

        $this->assertInstenceOf(ICommand::class,$summation);
    }
    public function testExecute()
    {
        $summation = new Summation(5,5);
        $result = $summation->execute();

        $this->assertEquels(10, $result);
    }
}