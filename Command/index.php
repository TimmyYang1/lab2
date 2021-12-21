<?php
namespace Command;

class main{
    public function run()
    {
        $calculator = new Calculetor();
        $summation = new Summation(1,2);
        $calculator->setCommand($summation);
        echo  "Сложение".(string)$calculator->calculat();
        $division = new Division(121656844684,84981984);
        $calculator->setCommand($division);
        echo  "Деление".(string)$calculator->calculat();
        $subtraction = new Subtraction(12165,8484);
        $calculator->setCommand($subtraction);
        echo  "Вычитание".(string)$calculator->calculat();
        $Multiplication = new Multiplication(121,8);
        $calculator->setCommand($Multiplication);
        echo  "Умножение".(string)$calculator->calculat();
        $SquareArea = new SquareArea(5);
        $calculator->setCommand($SquareArea);
        echo  "Площадь квадрата".(string)$calculator->calculat();

    }
}
