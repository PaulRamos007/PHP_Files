<?php require_once 'Animal.php';

//Child Class
class Dog extends Animal
{
    //Implementing the methods
    public function communicate()
    {
        echo "Bark";
    }

    public function move()
    {
        echo "Run";
    }
}
