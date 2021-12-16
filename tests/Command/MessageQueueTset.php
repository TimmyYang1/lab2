<?php
namespace Test\Command;

use PHPUnit\Framework\TestCase;
use Command;

class MessageQueueTest extends TestCase
{
    public function testAddMessageException()
    {
        $messageQueue = new MessageQueue();
        $messageQueue->addMessage('asdas');

        $this->assertExcetion(Exception::class);
    }

    public function testExecute()
    {
        $messageQueue = new MessageQueue();
        $messageQueue->addMessage(new TestMessageClass());
        $messageQueue->addMessage(new TestMessageClass());
        $messageQueue->addMessage(new TestMessageClass());
        $messageQueue->addMessage(new TestMessageClass());

        $this->assertEquels(4,$messageQueue->execute());
    }
}
class TestMessageClass implements IMessage
{
    public function setd()
    {
        //Что то делает
    }
}