<?php

class movie
{
    public $name;
    public $language;
    public $date;

    public $address;


    public function __construct($name, $language, $date, Address $address)
    {
        $this->name = $name;
        $this->language = $language;
        $this->date = $date;
        $this->address = $address;


    }

    public function getFullName()
    {
        return $this->name . '<br>' . $this->language . '<br>' . $this->date . '<br>';
    }


    public function getFullAddress()
    {
        return $this->address->street . ',' . $this->address->city . ',' . $this->address->postCode . '<br>';

    }
}