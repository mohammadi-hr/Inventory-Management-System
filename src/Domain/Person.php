<?php


namespace PMS\Domain;
use PMS\Domain\Identity;

class Person extends Identity
{
    protected $lastname;


    public function __construct(string $firstname, string $lastname, string $email, string $phone, string $mobile)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
        $this->mobile = $mobile;
    }


}