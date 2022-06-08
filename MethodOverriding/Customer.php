<?php require_once 'Person.php';


//Child Class
class Customer extends Person
{
    //Properties
    protected $id;
    protected $email;

    //Constructor
    public function __construct($id, $firstName, $lastName, $email)
    {
        $this->id = $id;
        $this->email = $email;
        //Parent Class constructor on Child Class
        parent::__construct($firstName, $lastName);
    }

    //Method (if you have the same name the method on the child class will be preferred)
    public function greet()
    {
        //Calling the method from parent class
        echo parent::greet();

        echo "Good Morning " . $this->firstName . " " . $this->lastName;
    }

    public function __toString()
    {
        return "Customer name is " . parent::__toString() . " and email is " . $this->email;
    }
}
