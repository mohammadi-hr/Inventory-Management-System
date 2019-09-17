<?php


namespace PMS\Domain;


class Address
{
    private $main_street;

    public function __construct(string $main_street)
    {
        $this->main_street = $main_street;
    }

    public function __toString()
    {
        return $this->main_street;
    }


}