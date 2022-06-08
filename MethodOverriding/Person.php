<?php

//Parent Class
class Person
{
    //Properties
    protected $firstName;
    protected $lastName;

    //Constructor
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    //Method
    //For inheritance use protected or public modifier
    protected function greet()
    {
        echo "Hi there! ";
    }

    //ToString Method
    public function __toString()
    {
        return $this->firstName . " " . $this->lastName;
    }
}
