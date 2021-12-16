<?php
namespace Command;

class main{
    public function run()
    {
        $customers = [
            (new Customer('Иван'))->setSurname('Иванов')->setEmail('ivanov@uvanov.ru'),
            (new Customer('Василий'))->setSurname('Васильев')->setPhone('88005553535'),
            (new Customer('Александр'))->setSurname('Александров')->setEmail('alex@ualex.ru')->setPhone('89005553535')
        ];
        // создание новой очереди сообщений
        $msgQueue = new MessageQueue();

        foreach($customers  as $customer){
            try{
                // Фабрика создаёт объект DailyAlertSMS или DailyAlertEmail
                $msg = MessageFactory::build($customer, $codeword);
            }catch(\Exception $exception)
            {
                echo "Не удалось связаться с пользователем";
            }
            // добавить объект сообщения в очередь
            $msgQueue->addMessage($msg);
        }

        // отправить всем заказчикам
        $msgQueue->execute();
    }
}
