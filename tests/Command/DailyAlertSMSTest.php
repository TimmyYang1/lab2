<?php
namespace Test\Command;

use PHPUnit\Framework\TestCase;
use Command;

class DailyAlertSMSTest extends TestCase
{
    public function testConstructExceptionWithZeroParams()
    {
        $emailMessage = new DailyAlertSMS();
        $this->assertException(Exception::class);
    }
    public function testConstructExceptionWithOneParams()
    {
        $emailMessage = new DailyAlertSMS('88005553535');
        $this->assertException(Exception::class);
    }
    public function testConstructExceptionWithOneNullParams()
    {
        $emailMessage = new DailyAlertSMS(null,'какое то сообщение');
        $this->assertException(Exception::class);
    }
    public function testConstructExceptionWithTwoNullParams()
    {
        $emailMessage = new DailyAlertSMS(null,null);
        $this->assertException(Exception::class);
    }

    
}