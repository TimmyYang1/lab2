<?php 

namespace Builder;

/**
 * Класс контакт
 */
class Contact{
    //Имя контакта
    private  string $name;
    //Фамилия контакта
    private  string $surname;
    //Почта контакта
    private  string $email;
    //Телефон контакта
    private  string $phone;
    //Адрес контакта
    private  string $address;

    /**
     * Конструктор контакта, инициализирует объект контакта и задаёт свойства объекта
     */
    public function __construct(ContactBuilder $contactBuilder){
        $this->name = $contactBuilder->getName();
        $this->surname = $contactBuilder->getSurname();
        $this->email = $contactBuilder->getEmail();
        $this->phone = $contactBuilder->getPhone();
        $this->address = $contactBuilder->getAddress();
    }
    /**
     * Возвращает имя контакта
     */
    public function getName():string
    {
        return $this->name;
    }   
    /**
     * Возвращает фамилию контакта
     */
    public function getSurname(): string
    {
        return $this->surname;
    }   
    /**
     * Возвращает почту контакта
     */
    public function getEmail():string
    {
        return $this->email;
    }    
    /**
     * Возвращает телефон контакта
     */
    public function getPhone():string
    {
        return $this->phone;
    }    
    /**
     * Возвращает адрес контакта
     */
    public function getAddress():string
    {
        return $this->address;
    }
}