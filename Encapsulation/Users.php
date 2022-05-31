<?php

/**
 * Private 
 * The private visibility means that properties and methods of the class cannot be 
 * accessed by outside
 * 
 * Protected 
 * The protected visibility means that the properties and methods of the class can 
 * be accessed by only its children class/ subclass
 * 
 * Public
 * Public visibility means that the properties and methods of the class can be 
 * accessed from outside
 */

class Users
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($id, $firstName, $lastName, $email)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }
}
