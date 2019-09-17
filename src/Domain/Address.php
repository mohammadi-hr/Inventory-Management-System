<?php


namespace PMS\Domain;


class Address
{
    private $country;
    private $city;
    private $state;
    private $main_st;
    private $second_st;
    private $address_details;
    private $postal_code;

    public function __construct($country, $city, $state, $main_st, $second_st, $address_details, $postal_code)
    {
        $this->country = $country;
        $this->city = $city;
        $this->state = $state;
        $this->main_st = $main_st;
        $this->second_st = $second_st;
        $this->address_details = $address_details;
        $this->postal_code = $postal_code;
    }


    public function __toString()
    {
        return $this->main_st;
    }


}