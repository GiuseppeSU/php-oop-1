<?php

class movie
{
    public $name;
    public $language;
    public $date;

    public $generi;


    public function __construct($name, $language, $date, array $generi)
    {
        $this->name = $name;
        $this->language = $language;
        $this->date = $date;
        $this->generi = $generi;


    }

    public function getFullName()
    {
        return $this->name . '<br>' . $this->language . '<br>' . $this->date . '<br>';
    }


    public function getFullAddress()
    {
        $indirizzi = '';

        foreach ($this->generi as $generi) {
            $indirizzi .= $generi->street . ', ' . $generi->city . ', ' . $generi->postcode . '<br>';
        }

        return $indirizzi;

    }
}