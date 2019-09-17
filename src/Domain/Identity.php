<?php


namespace PMS\Domain;

use PMS\Utils\UniqueId;

abstract class Identity
{
    use UniqueId;

    protected $name;
    protected $email;
    protected $phone;
    protected $mobile;
    protected $address;

    public function __construct($id, $name, $email, $phone, $mobile,Address $address)
    {
        $this->setId($id);
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->mobile = $mobile;
        $this->address = $address;
    }


}