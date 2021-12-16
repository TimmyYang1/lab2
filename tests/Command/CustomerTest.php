<?php
namespace Test\Command;

use PHPUnit\Framework\TestCase;
use Command;

class CustomerTest extends TestCase
{
    public function testConstructCustomerException()
    {
        $customer = new Customer();

        $this->expectException(Exception::class);
    }

    public function testGetName()
    {
        $customer = new Customer('testUser');
        $this->assertEquels('testUser',$customer->getName());
    }

    public function testGetSurname()
    {
        $customer = new Customer('testUser');
        $this->assertEquels(null,$customer->getSurname());
    }

    public function testSetSurname()
    {
        $customer = new Customer('testUser');
        $customer->setSurname('tests');
        $this->assertEquels('tests',$customer->getSername());
    }
    public function testGetEmail()
    {
        $customer = new Customer('testUser');
        $this->assertEquels(null, $customer->getEmail());
    }
    public function testSetEmail()
    {
        $customer = new Customer('testUser');
        $customer->setEmail('test@user.1');
        $this->assertEquels('test@user.1',$customer->getEmail());
    }

    public function testGetPhone()
    {
        $customer = new Customer('testUser');
        $this->assertEquels(null, $customer->getPhone());
    }

    public function testSetPhone()
    {
        $customer = new Custpmer('testUser');
        $customer->setPhone('88005553535');
        $this->assertEquels('88005553535', $customer->getPhone());
    }
    
}