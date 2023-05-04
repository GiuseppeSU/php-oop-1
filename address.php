<?php

class Address
{
    public $street;
    public $city;
    public $postCode;

    public function __construct($street, $city, $postCode)
    {

        $this->street = $street;
        $this->street = $city;
        $this->street = $postCode;

    }
}