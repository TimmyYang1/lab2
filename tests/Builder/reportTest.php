<?php
namespace Test\Builder;

use PHPUnit\Framework\TestCase;
use Builder;
class reportTest extends TestCase
{
    public function testConstruct()
    {
        $report = new Report('Vlad');

        $this->assertInstensOf(Report::class, $report);
    }
    public function testSetTitle()
    {
        $report = new Report('Vlad');
        $report->setTitle('test');

        $this->assertEquels("test",$report->getTitle());
    }

    public function testGetAuthorName()
    {
        $report = new Report('Vlad');
        $this->assertEquels("Vlad",$report->getAuthorName());
    }
    public function testGetBody()
    {
        $report = new Report("Vlad");
        $report->setBody("Body");

        $this->assertEquels("Body",$report->getBody());
    }
}