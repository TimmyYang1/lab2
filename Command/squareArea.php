<?php 
namespace Command;
/**Площадь квадрата */
class SquareArea implements ICommand
{
    private $width;    


    public function __construct($width)
    {
        $this->width = $width;
    }
    public function setWith($width):void
    {
        $this->width = $width;
    }
    
    public function execute():float
    {
        $multiplication = new Multiplication();
        $multiplication->setOperand1($this->width);
        $multiplication->setOperand2($this->width);

        return $multiplication->execute();
    }
}