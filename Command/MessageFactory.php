<?php
namespace Command;

class MessageFactory
{
    // определяет способ связи с вользователем
    // приоритет на почтовое сообщение
    public static function build(Customer $customer,$message):IMessage
    {
        $sendMessage = "
            Здравствуйте {$customer->getName()},
            хочу сообщить вам что срок окончания семенстар уже близок, и надо что то начинать делать!
        ";
        if($customer->getEmail()){
            return new DailyAlertEmail($customer->getEmail(),$sendMessage);
        }
        if($customer->getPhone())
        {
            return new DailyAlertSMS($customer->getPhone(),$sendMessage);
        }

        throw new Excepion("Customer hasn't contact information");
    }
}