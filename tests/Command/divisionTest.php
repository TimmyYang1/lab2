<?php
namespace Test\Command;

use Command;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{

    public function testConstruct()
    {
        $division = new Division(5,5);

        $this->assertInstenceOf(ICommand::class,$division);
    }
    public function testExecute()
    {
        $division = new Division(12,4);
        $result = $division->execute();

        $this->assertEquels(3, $result);
    }
}