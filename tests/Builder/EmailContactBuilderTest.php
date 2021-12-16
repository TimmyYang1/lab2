<?php
namespace Test\Builder;

use PHPUnit\Framework\TestCase;
use Builder;


class EmailContactBuilderTest extends TestCase
{
    public function testBuildEmailContactException()
    {
        $emailContactBuilder = new EmailContactBuilder();
        $emailContactBuilder->setName('testUser');
        $contact = $emailContactBuilder->build();

        $this->expectException(Exception::class);        
    }
    public function testBuildEmailContact()
    {
        $emailContactBuilder = new EmailContactBuilder();
        $emailContactBuilder->setName('testUser');
        $emailContactBuilder->setEmail('test@user.1');
        $contact = $emailContactBuilder->build();
        $this->assertEquels('test@user.1',$contact->getEmail());
    }
}