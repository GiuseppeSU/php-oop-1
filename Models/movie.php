<?php

class movie
{
    public $name;
    public $language;
    public $date;

    public $addresses;


    public function __construct($name, $language, $date, $addresses)
    {
        $this->name = $name;
        $this->language = $language;
        $this->date = $date;
        $this->addresses = $addresses;


    }

    public function getFullName()
    {
        return $this->name . '<br>' . $this->language . '<br>' . $this->date . '<br>';
    }


    public function getFullAddress()
    {
        $indirizzi = '';

        foreach ($this->addresses as $address) {
            $indirizzi .= $address->street . ', ' . $address->city . ', ' . $address->postcode . '<br>';
        }

        return $indirizzi;

    }
}