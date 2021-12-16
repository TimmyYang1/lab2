<?php
namespace Test\Builder;

use PHPUnit\Framework\TestCase;
use Builder;

class ContactBuilderTest  extends TestCase
{
    public function testBuildEmptyContact()
    {
        $contactBuilder = new ContactBuilder();                
        $contact = $contactBuilder->build();
        $this->expectException(Exception::class);
    }

    public function testBuildContact()
    {
        $contactBuilder = new ContactBuilder();  
        $contactBuilder->setName("testUser");   
        $contact = $contactBuilder->build();
        $this->assertInstanceOf(Contact::class,$contact);
        
    }

    public function testBuildContactWithName()
    {
        $contactBuilder = new ContactBuilder();  
        $contactBuilder->setName("testUser");   
        $contact = $contactBuilder->build();
        $this->assertEquals("testUser",$contact->getName());
        return $contact;
    }

    /**
     * @dataProvider additionProvider
     */
    public function testEmptySurname(Customer $contact)
    {
        $this->assertEquals("Not set",$contact->getSurname());
    }

    /**
     * @dataProvider additionProvider
     */
    public function testEmptyPhone(Customer $contact)
    {
        $this->assertEquals("Not set",$contact->getPhone());
    }

    /**
     * @dataProvider additionProvider
     */
    public function testEmptyEmail(Customer $contact)
    {
        $this->assertEquals("Not set",$contact->getEmail());
    }

    public function testGetName()
    {
        $contactBuilder = new ContactBuilder();
        $this->assertEquels('Not set',$contactBuilder->getName());
    }

    public function testSetName()
    {
        $contactBuilder = new ContactBuilder();
        $contactBuilder->setName('testUser1');
        $this->assertEquels('testUser1',$contactBuilder->getName());
    }

    public function testGetSurname()
    {
        $contactBuilder = new ContactBuilder();
        $this->assertEquels('Not set',$contactBuilder->getSurname());
    }
    public function testSetSurname()
    {
        $contactBuilder = new ContactBuilder();
        $contactBuilder->setSurname('testUser1');
        $this->assertEquels('testUser1',$contactBuilder->getSurname());
    }

    public function testGetAddress()
    {
        $contactBuilder = new ContactBuilder();
        $this->assertEquels('Not set',$contactBuilder->getAddress());
    }

    public function testSetAddress()
    {
        $contactBuilder = new ContactBuilder();
        $contactBuilder->setAddress('testUser1Address');
        $this->assertEquels('testUser1Address',$contactBuilder->getAddress());
    }

    public function testGetEmail()
    {
        $contactBuilder = new ContactBuilder();
        $this->assertEquels('Not set',$contactBuilder->getEmail());
    }
    public function testSetEmail()
    {
        $contactBuilder = new ContactBuilder();
        $contactBuilder->setEmail('test@user.1');
        $this->assertEquels('test@user.1',$contactBuilder->getEmail());
    }

    public function testGetPhone()
    {
        $contactBuilder = new ContactBuilder();
        $this->assertEquels('Not set',$contactBuilder->getPhone());
    }
    public function testSetPhone()
    {
        $contactBuilder = new ContactBuilder();
        $contactBuilder->setPhone('88005553535');
        $this->assertEquels('88005553535',$contactBuilder->getPhone());
    }


    

}