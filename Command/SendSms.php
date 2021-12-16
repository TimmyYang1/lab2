<?php
namespace Command;
class DailyAlertSMS implements IMessage
{
    private $phone;
    private $message;

    public function __construct($phone, $message){
        $this->phone = $phone;
        $this->message = $message;
    }
    // отправляет запрос на сервер который отправляет смс
    public function send() {
        $myCurl = curl_init();
        curl_setopt_array($myCurl, array(
            CURLOPT_URL => 'http://api2.1000sms.ru/?method=push_msg&email=YOUR_LOGIN&password=YOUR_PASSWORD&text='.$this->message.'&phone='.$this->phone.'&sender_name=MyBrandName',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true
        ));
        $response = curl_exec($myCurl);
        $responseStatus = curl_getinfo($myCurl,CURLINFO_HTTP_CODE);
        curl_close($myCurl); 
        if(!$response || $responseStatus!=200)
        {
            throw new Exception("При отправки сообщения возникла ошибка");
        }    
    }
}