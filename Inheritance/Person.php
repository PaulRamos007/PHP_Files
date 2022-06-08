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
}
