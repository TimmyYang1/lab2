<?php

use Builder;

class mailn{

   public function runBuilder(){
       $contactManager = new ContactManager();

       $phoneContact = $contactManager->createNewPhoneContact()
            ->setName("User1")
            ->setSurname("User1")
            ->setPhone("123456789")
            ->build();

        $emmailContact = $contactManager->createNewEmailContact()
            ->setName("user2")
            ->setSurname("User2")
            ->setEmail("user2@user.us")
            ->build();

        var_dump($phoneContact);
        var_dump($emmailContact);
   }

   

}