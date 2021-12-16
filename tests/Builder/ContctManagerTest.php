<?php
namespace Test\Builder;

use PHPUnit\Framework\TestCase;
use Builder;

class testContactManager extends TestCase
{
    
    public function testCreateEmailContact()
    {
        $contactManager = new ContactManager();
        $contactBuilder = $contactManager->createNewEmailContact();
        $this->assertInstanceOf(EmailContactBuilder::class,$contactBuilder);
    }

    public function testCreatePhoneContact()
    {
        $contactManager = new ContactManager();
        $contactBuilder = $contactManager->createNewPhoneCContact();
        $this->assertInstanceOf(PhoneContactBuilder::class,$contactBuilder);
    }
}

