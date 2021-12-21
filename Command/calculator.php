<?php
namespace Command;
class Calculator
{
    public ICommand $command;
    public function calculat():float
    {
        return $this->command->execute();
    }
    public function setCommand(ICOmmand $command):void
    {
        $this->command = $command;
    }
}