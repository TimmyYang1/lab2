<?php
namespace Test\Command;

use PHPUnit\Framework\TestCase;
use Command;

class MessageFuctoryTest extends TestCase
{
    public function testBuildMessageException()
    {
        MessageFactory::build(new Customer(),'');
        $this->assertEception(Exception::class);
    }

    public function testBuildEmailMessage()
    {
        $message = Messagefactory::build((new Customer('testUser'))->setEmail('test@user.1'));

        $this->assertInstanceOf(DailyAlertEmail::class,$message);
    }
    public function testBuildSmsMessage()
    {
        $message = Messagefactory::build((new Customer('testUser'))->setPhone('88005553535'));

        $this->assertInstanceOf(DailyAlertSMS::class,$message);
    }

    public function testPriorityMessage()
    {
        $message = Messagefactory::build((new Customer('testUser'))->setEmail('test@user.1')->setPhone('88005553535'));

        $this->assertInstanceOf(DailyAlertEmail::class,$message);
    }
}