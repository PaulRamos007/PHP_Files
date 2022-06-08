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
}
