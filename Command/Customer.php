<?php 
namespace Command;
class Customer{
    private $name;
    private $surname=null;
    private $email=null;
    private $phone=null;

    public function __construct($name)
    {
        $this->name = $name;
    }
    // задаёт фамилию полькователя
    public function setSurname(string $surname):Customer
    {
       $this->surname = $surname;
       return $this; 
    }
    // задаёт почту полькователя
    public function setEmail(string $email):Customer
    {
        $this->email = $email;
        return $this;
    }
    // задаёт телефон полькователя
    public function setPhone(string $phone):Customer
    {
        $this->phone = $phone;
        return $this;
    }
    //возвращает имя пользователя
    public function getName():string
    {
        return $this->name;
    }
    //возвращает фамилию пользователя
    public function getSurname():string
    {
        return $this->surname;
    }
    //возвращает почту пользователя
    public function getEmail():string 
    {
        return $this->email;
    }
    //возвращает тулуфон пользователя
    public function getPhone():string
    {
        return $this->phone;
    }
}