<?php
namespace Command;
/** Сложение */
class Summation implements ICommand
{
    private $operand1;
    private $operand2;

    public function __construct($operand1, $operand2)
    {
        $this->operand1 = $operand1;
        $this->operand2 = $operand2;
    }
    public function setOperand1($operand1):void
    {
        $this->operand1 = $operand1;
    }
    public function setOperand2($operand2):void
    {
        $this->operand2 = $operand2;
    }
    public function execute():float
    {
        return $this->operand1 + $operand2;
    }
}