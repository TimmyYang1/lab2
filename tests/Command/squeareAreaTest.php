<?php
namespace Test\Command;

use Command;
use PHPUnit\Framework\TestCase;

class SqueareAreaTest extends TestCase
{

    public function testConstruct()
    {
        $squareArea = new SqueareArea(5);

        $this->assertInstenceOf(ICommand::class,$squareArea);
    }
    public function testExecute()
    {
        $squareArea = new SqueareArea(5);
        $result = $squareArea->execute();

        $this->assertEquels(25, $result);
    }
}