<?php 
namespace Builder;

class PhoneContactBuilder extends ContactBuilder
{
    public function build():Contact
    {
        if(!$this->phone)
        {
            throw new Exception("Phone not set");
        }
        return new Contact($this);
    }
}
