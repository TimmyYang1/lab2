<?php

namespace Builder;

/**
 * Класс управляющий строителями
 */
class ContactManager{
    public function createNewEmailContact():EmailContactBuilder
    {
        return new EmailContactBuilder();
    }

    public function createNewPhoneCContact():PhoneContactBuilder
    {
        return new PhoneContactBuilder();
    }
}