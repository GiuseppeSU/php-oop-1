<?php

class Generi
{
    public $street;
    public $city;
    public $postCode;

    public function __construct($street, $city, $postCode)
    {

        $this->street = $street;
        $this->city = $city;
        $this->postCode = $postCode;

    }



}