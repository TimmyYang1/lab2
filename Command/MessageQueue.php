<?php
namespace Command;
class MessageQueue
{
    private $queue;

    public function __construct() 
    {
        $this->queue = [];
    }

    public function addMessage(IMessage $msg) 
    {
        $this->queue[] = $msg;
    }

    public function execute() 
    {
        $sendCount = 0;

        foreach ($this->queue as $msg) {
            if ($msg->send()) {
                $sendCount++;
            }
        }

        return $sendCount;
    }
}