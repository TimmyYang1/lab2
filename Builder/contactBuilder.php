<?php
namespace Builder;

/**
 * Базовый класс конструктора контактов
*/
class ContactBuilder{
    //Имя контакта
    private string $name;
    //Фамилия контакта
    private string $surname;
    //Почта контакта
    private string $email;
    //Телефон контакта
    private string $phone;
    //Адрес контакта
    private string $address;

    /**
     * Позволяет задать имя контакта
     */
    public function setName(string $name):ContactBuilder
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Позволяет задать фамилию контакта
     */
    public function setSurname(string $surname):ContactBuilder
    {
        $this->surname = $surname;
        return $this;
    }
    /**
     * Позволяет задать почту контакта
     */
    public function setEmail(string $email):ContactBuilder
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Позволяет задать телефон контакта
     */
    public function setPhone(string $phone):ContactBuilder
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * Позволяет задать адрес контакта
     */
    public function setAddress(string $address):ContactBuilder
    {
        $this->address = $address;
        return $this;
    }
     /**
     * Возвращает имя контакта или строку "Not set"
     */
    public function getName():string
    {
        return $this->name??"Not set";
    }
    /**
     * Возвращает фамилию контакта или строку "Not set"
     */
    public function getSurname(): string
    {
        return $this->surname??"Not set";
    }
    /**
     * Возвращает почту контакта или строку "Not set"
     */
    public function getEmail():string
    {
        return $this->email??"Not set";
    }
    /**
     * Возвращает телефон контакта или строку "Not set"
     */
    public function getPhone():string
    {
        return $this->phone??"Not set";
    }
    /**
     * Возвращает адрес контакта или строку "Not set"
     */
    public function getAddress():string
    {
        return $this->address??"Not set";
    }
    /**
     * Строёт контакт
     */
    public function build():Contact{
        if(!$this->name)
        {
            throw new Exception("Name not set");
        }        
        return new Contact($this);
    }
}