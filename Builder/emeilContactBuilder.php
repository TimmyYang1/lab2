<?php
namespace Builder;

class EmailContactBuilder extends ContactBuilder
{
    public function build():Contact
    {
        if(!$this->email)
        {
            throw new Exception("Email not set");
        }
        return new Contact($this);
    }
}