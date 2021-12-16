<?php
namespace Test\Builder;

use PHPUnit\Framework\TestCase;
use Builder;


class phoneContactBuilderTest extends TestCase
{
    public function testBuildPhoneContactException()
    {
        $phoneContactBuilder = new PhonelContactBuilder();
        $phoneContactBuilder->setName('testUser');
        $contact = $phoneContactBuilder->build();

        $this->expectException(Exception::class);        
    }
    public function testBuildPhoneContact()
    {
        $phoneContactBuilder = new PhonelContactBuilder();
        $phoneContactBuilder->setName('testUser');
        $phoneContactBuilder->setphone('88005553535');
        $contact = $phoneContactBuilder->build();
        $this->assertEquels('88005553535',$contact->getphone());
    }
}