<?php
namespace Command;
class DailyAlertEmail implements IMessage
{
    private $email;
    private $message;
    public function __construct($email, $message)
    {
        $this->email = $email;
        $this->message = $message;
    }
    //отправляет письмо на почту
    public function send() {

        // На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
        $message = wordwrap($message, 70, "\r\n");
        // Отправляем
        if(!mail($this->email, 'My Subject', $this->message)){
            throw new Exception("Возникла ошибка при отправке сообщения");
        }
    }
}